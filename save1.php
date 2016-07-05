<?php
// вся процедура работает на сесиях. Именно в ней хранятся данные пользователя, пока он находится на сайте. Очень важно запустить их в самом начале странички!!!
session_start();
?>


<?php





$name=$_POST['name'];
$email=$_POST['email'];
$telephone=$_POST['telephone'];
$mesto=$_POST['mesto'];
$about=$_POST['about'];

           $id= $_SESSION['id'];

   echo "id=".$id;
//$id=2;
    include ("bd.php");// файл bd.php должен быть в той же папке, что и все остальные, если это не так, то просто измените путь

           $query = "DELETE FROM `prof` WHERE `id`=$id";
  mysql_query($query) or die(mysql_error());







//mysql_query("SET CHARACTER SET 'utf-8'");
//mysql_query("SET NAMES 'utf-8");

// если такого нет, то сохраняем данные
$query2 = "INSERT INTO prof
VALUES('$id','$name','$telephone','$email','$mesto','$about')";

$result2 = MYSQL_QUERY($query2);


// Проверяем, есть ли ошибки
if ($result2=='TRUE')
{
echo "Вы успешно зарегистрированы! Теперь вы можете зайти на сайт. <a href='index.php'>Главная страница</a>";
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