      <?php
// вся процедура работает на сесиях. Именно в ней хранятся данные пользователя, пока он находится на сайте. Очень важно запустить их в самом начале странички!!!
session_start();
  $id=  $_SESSION['id'];
 $search='Ничего не найдено';
?>

<!DOCTYPE HTML>

<html>

<head>
  <title>Menu</title>
    <link href="bootstrap.min.css" rel="stylesheet">
   	   <meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
</head>

<body>
    <form action="search.php" method="post">


  <div class="navbar">
        <div class="navbar-inner">
        <a class="brand" href="index.php">Cloud logistics</a>

        <ul class="nav nav-tabs">
        <ul class="nav">
        <li><a href="vh.php">Входящие








        <?php
                    $g= 0;
          include ("bd.php");
                                  $i=  $_SESSION['id'];


 //   $result = mysql_query("SELECT * FROM prof where WHERE `id`=2",$db);
  //  $row=mysql_fetch_array($result);
        echo     $row['id'];

      echo     $row['name'];


                $komu=$_SESSION['id'];

 $query = sprintf("SELECT * FROM mail
    WHERE komu=$komu  ORDER BY date DESC  ");



  //  mysql_real_escape_string($firstname),
  //  mysql_real_escape_string($lastname));

// Выполняем запрос
$result = mysql_query($query);

// Проверяем результат
// Это показывает реальный запрос, посланный к MySQL, а также ошибку. Удобно при отладке.
if (!$result) {
    $message  = 'Неверный запрос: ' . mysql_error() . "\n";
    $message .= 'Запрос целиком: ' . $query;
    die($message);
}



 ?>


<?php     while ($row = mysql_fetch_assoc($result)) {
         $read= $row['read'];

   if ($read=="no")
 {
    $g=$g+1;
     }  }
      if ($g==0) $g='';
      else echo '+';

     echo $g;
     if ($g==0)



       ?>













        </a></li>
                <li>
                <?

                 echo "
                <a href='http://cloud-logistics.ru/id$id'> Мой Профиль</a>     "
                ?></li>
                 <li><a href="red.php">Редактировать профиль</a></li>
      <li><a href="news.php">Новые перевозки</a></li>
        <li><a href="news2.php">Новые перевозчики</a></li>

                <li><a href="rp2.php">Расширенный поиск</a></li>
 
 </form>






        <li ><a href="logout.php" align=right>Выход</a></li>
        </ul>
        </div>
        </div>


<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="js/bootstrap.min.js"></script>




</body>

</html>