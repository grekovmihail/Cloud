<?php
// вся процедура работает на сесиях. Именно в ней хранятся данные пользователя, пока он находится на сайте. Очень важно запустить их в самом начале странички!!!
session_start();

?>

 <style type="text/css">

        H3 {
    color: black; /* Синий цвет текста */
     font-size: 13pt; /* Размер надписи */
      text-decoration: none;
        font-style: italic; /* Курсивное начертание */
        margin: 90px;  }



  </style>



<?php


if (isset($_POST['login'])) { $login = $_POST['login']; if ($login == '') { unset($login);} }
//заносим введенный пользователем логин в переменную $login, если он пустой, то уничтожаем переменную
if (isset($_POST['password'])) { $password=$_POST['password']; if ($password =='') { unset($password);} }
//заносим введенный пользователем пароль в переменную $password, если он пустой, то уничтожаем переменную

if (empty($login) or empty($password)) //если пользователь не ввел логин или пароль, то выдаем ошибку и останавливаем скрипт
{
exit (" <h3> Вы ввели не всю информацию, венитесь назад и заполните все поля! </h3>");
}


//$login=$_POST['login'];
$email=$_POST['email'];
//$password=$_POST['password'];
//$id=2;


//если логин и пароль введены,то обрабатываем их, чтобы теги и скрипты не работали, мало ли что люди могут ввести
$login = stripslashes($login);
$login = htmlspecialchars($login);

$password = stripslashes($password);
$password = htmlspecialchars($password);

//удаляем лишние пробелы
$login = trim($login);
$password = trim($password);


// подключаемся к базе
include ("bd.php");// файл bd.php должен быть в той же папке, что и все остальные, если это не так, то просто измените путь



 $i=0;

$result=mysql_query('SELECT * FROM `users`');
// берем результаты из каждой строки



while($row=mysql_fetch_array($result))
{ // выводим данные
//$row['prim'] =iconv( 'UTF-8', 'Windows-1251', $row ['prim']);
//$row['adres','finish', 'FIO', 'contacts','prim'] =iconv( 'UTF-8', 'Windows-1251', $row );

	$i++;


}


// проверка на существование пользователя с таким же логином
$result = mysql_query("SELECT id FROM users WHERE login='$login'",$db);
$myrow = mysql_fetch_array($result);
if (!empty($myrow['id'])) {
exit (" <h3> Извините, введённый вами логин уже зарегистрирован. Введите другой логин.
<a href='reg.php'> Назад </a>  </h3>");
}

    $id=$i;



//mysql_query("SET CHARACTER SET 'utf-8'");
//mysql_query("SET NAMES 'utf-8");

// если такого нет, то сохраняем данные

$query2 = "INSERT INTO users
VALUES('id','$login','$password','$email')";

$result2 = MYSQL_QUERY($query2);


// Проверяем, есть ли ошибки
if ($result2=='TRUE')
{
echo"   <H3>    Добро пожаловать на наш сайт,<a href='http://cloud-logistics.ru/id$id'> $login</a>!  Спасибо за регистрацию! <br>  Теперь вы можете заполнить информацию о вас как о
 <a href='red.php'> Перевозчике </a>  или <a href='red2.php'>Грузоотправителе </a>. <br>       Ссылка на ваши профили:
 <a href='http://cloud-logistics.ru/id$id'> http://cloud-logistics.ru/id$id </a>
 </h3>

 "

 ;



          $_SESSION['login']=$login;

            $_SESSION['id']=$id;


}

else {
echo "Ошибка! Вы не зарегистрированы.";
     }




 /*

// если такого нет, то сохраняем данные
$result2 = mysql_query ("INSERT INTO users (login,password,email) VALUES('$login',','$password','$email'')");
// Проверяем, есть ли ошибки
if ($result2=='TRUE')
{
echo "Вы успешно зарегистрированы! Теперь вы можете зайти на сайт. <a href='index.php'>Главная страница</a>";
}

else {
echo "Ошибка! Вы не зарегистрированы.";
     }     */
?>