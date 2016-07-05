<?php

  /*
if (isset($_POST['login'])) { $login = $_POST['login']; if ($login == '') { unset($login);} }
//заносим введенный пользователем логин в переменную $login, если он пустой, то уничтожаем переменную
if (isset($_POST['password'])) { $password=$_POST['password']; if ($password =='') { unset($password);} }
//заносим введенный пользователем пароль в переменную $password, если он пустой, то уничтожаем переменную

if (empty($login) or empty($password)) //если пользователь не ввел логин или пароль, то выдаем ошибку и останавливаем скрипт
{
exit ("Вы ввели не всю информацию, венитесь назад и заполните все поля!");
}

  */


//  VALUES('$login','$date','$raion','$type','$about')";



$date=$_POST['date'];
$raion=$_POST['raion'];
$type=$_POST['type'];
$about=$_POST['about'];

        $login=  $_SESSION['login'];

//$id=2;
    include ("bd.php");// файл bd.php должен быть в той же папке, что и все остальные, если это не так, то просто измените путь

     /*
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


     /*


$result=mysql_query('SELECT * FROM `users`');
// берем результаты из каждой строки



while($row=mysql_fetch_array($result))
{ // выводим данные
//$row['prim'] =iconv( 'UTF-8', 'Windows-1251', $row ['prim']);
//$row['adres','finish', 'FIO', 'contacts','prim'] =iconv( 'UTF-8', 'Windows-1251', $row );

	$i++;


}


     echo $i;

      */






 */

                    /*

// проверка на существование пользователя с таким же логином
$result = mysql_query("SELECT id FROM users WHERE login='$login'",$db);
$myrow = mysql_fetch_array($result);
if (!empty($myrow['id'])) {
exit ("Извините, введённый вами логин уже зарегистрирован. Введите другой логин.");
}

    $id=$i+1;
     echo $id;

                  */
//mysql_query("SET CHARACTER SET 'utf-8'");
//mysql_query("SET NAMES 'utf-8");

// если такого нет, то сохраняем данные
$query2 = "INSERT INTO zaipere
VALUES('$login','$date','$raion','$type','$about')";

$result2 = MYSQL_QUERY($query2);


// Проверяем, есть ли ошибки
if ($result2=='TRUE')
{
//echo "Вы успешно зарегистрированы! Заполните ваш профиль, пожалуйста. <a href='red.php'> Перевозчик </a> <a href='red2.php'>Грузоотправитель </a>";

   echo "Заявка оформлена! ";




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