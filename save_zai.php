<?php
// вся процедура работает на сесиях. Именно в ней хранятся данные пользователя, пока он находится на сайте. Очень важно запустить их в самом начале странички!!!
session_start();
?>

      <script type="text/javascript">
setTimeout('location.replace("http://cloud-logistics.ru/news.php")', 1);
</script>
<?php

      $type=" ";
            $date=" ";    $out=" ";    $in=" ";      $about=" ";

$date=$_POST['date'];
$type=$_POST['type'];

$in=$_POST['in'];
 $out=$_POST['out'];
$about=$_POST['about'];

        $login=  $_SESSION['login'];

           $d= $_SESSION['id'];
               $vre=date("F j, Y, g:i a");

   echo "id=".$id;
//$id=2;
    include ("bd.php");// файл bd.php должен быть в той же папке, что и все остальные, если это не так, то просто измените путь

//mysql_query("SET CHARACTER SET 'utf-8'");
//mysql_query("SET NAMES 'utf-8");
          // если такого нет, то сохраняем данные
$query2 = "INSERT INTO zai
VALUES('$d', '$login','$date','$out','$in','$type','$about', '$vre')";

$result2 = MYSQL_QUERY($query2);


// Проверяем, есть ли ошибки
if ($result2=='TRUE')
{
echo "Заявка сохранена";
}

else {
echo "Ошибка! ";
     }

?>