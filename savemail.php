<?php
// вся процедура работает на сесиях. Именно в ней хранятся данные пользователя, пока он находится на сайте. Очень важно запустить их в самом начале странички!!!
session_start();
?>

      <script type="text/javascript">
setTimeout('location.replace("vh.php")', 0);
</script>
<?php

      //    $zero=$_SESSION['zero'];


$result=mysql_query('SELECT * FROM `mail`');
// берем результаты из каждой строки

while($row=mysql_fetch_array($result))
{ // выводим данные
//$row['prim'] =iconv( 'UTF-8', 'Windows-1251', $row ['prim']);
//$row['adres','finish', 'FIO', 'contacts','prim'] =iconv( 'UTF-8', 'Windows-1251', $row );
             	$i++;
             }


           $otkogo=" ";
            $text=" ";    $komu=" ";    $date=" ";

//$_SESSIONotkogo=$_POST['otkogo'];
$text=$_POST['text'];

 $date=date("F j, Y, g:i a");


     $otkogo=$_SESSION['login'];
          $komu=$_SESSION['zeta'];
           $idq=  $_SESSION['id'];
  // $id=$i;


      //   $komu--;


//$id=2;
    include ("bd.php");// файл bd.php должен быть в той же папке, что и все остальные, если это не так, то просто измените путь

   //        $query = "DELETE FROM `` WHERE `id`=$id";
 // mysql_query($query) or die(mysql_error());




//mysql_query("SET CHARACTER SET 'utf-8'");
//mysql_query("SET NAMES 'utf-8");

// если такого нет, то сохраняем данные
       $kom="fail";
     $read="no";
     $kom=$_SESSION['kom'];


$query2 = "INSERT INTO mail
VALUES('$id','$idq','$otkogo','$text','$komu','$date','$kom','$read')";

$result2 = MYSQL_QUERY($query2);


// Проверяем, есть ли ошибки
if ($result2=='TRUE')
{
echo "Отправленно";
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