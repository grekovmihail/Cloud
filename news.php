      <?php
// вся процедура работает на сесиях. Именно в ней хранятся данные пользователя, пока он находится на сайте. Очень важно запустить их в самом начале странички!!!
session_start();
?>
<html>
 <html lang="en">

<head>
  <title>Профиль</title>
   <link href="bootstrap.min.css" rel="stylesheet">
   	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

</head>

<body>



  <? echo "Вы вошли на сайт, как ".$_SESSION['login'];
        $id=  $_SESSION['id'];
    echo 'id='.$id;

 if (empty($_SESSION['login']) or empty($_SESSION['id']))
 {


echo "Вы не авторизированы  error!!!";
}


//{


//код страницы

    else
{







   ?>
         <div class="navbar">
        <div class="navbar-inner">
        <a class="brand" href="#">Лэйбл</a>

        <ul class="nav nav-tabs">
        <ul class="nav">
        <li class="active"><a href="#">Профиль</a></li>
        <li><a href="news.php">Новые перевозки</a></li>
        <li><a href="news2.php">Новые перевозчики</a></li>
        <li ><a href="logout.php" align=right>Выход</a></li>
        </ul>
        </div>
        </div>

<?php
 /*

   // ваш адрес где находится, хостится ваша база данных
$sdd_db_host='localhost';
// Имя базы данных с которой вы хотите работать, так как их может быть множество
$sdd_db_name='cl';
// логин доступ к базе данных
$sdd_db_user='root';
// пароль доступа к базе данных
$sdd_db_pass='45091847';
      */

  /*
// устанавливаем связь с сервером
@mysql_connect($sdd_db_host,$sdd_db_user,$sdd_db_pass);


//mysql_query("SET NAMES 'cp1251'");
mysql_query("SET NAMES 'utf8';");
mysql_query("SET CHARACTER SET 'utf8';");
mysql_query("SET SESSION collation_connection = 'utf8_general_ci';");



// переключаемся на нужную нам базу данных
@mysql_select_db($sdd_db_name);
// делаем выборку из таблицы

   mysql_query("SET NAMES 'utf8'");
                                    */
          include ("bd.php");

                                  $i=  $_SESSION['id'];

    $result = mysql_query("SELECT * FROM prof where WHERE `id`=2",$db);
  //  $row=mysql_fetch_array($result);
        echo     $row['id'];

      echo     $row['name'];




      $query = sprintf("SELECT * FROM zaipere");
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

// Используем результат
// Попытка напечатать $result не выведет информацию, которая в нем хранится
// Необходимо использовать какую-либо mysql-функцию, работающую с результатом запроса
// См. также mysql_result(), mysql_fetch_array(), mysql_fetch_row() и т.п.





// берем результаты из каждой строки


 /*
while($row=mysql_fetch_array($result))
{ // выводим данные
//$row['prim'] =iconv( 'UTF-8', 'Windows-1251', $row ['prim']);
//$row['adres','finish', 'FIO', 'contacts','prim'] =iconv( 'UTF-8', 'Windows-1251', $row );

	$i++;
  echo   '<p>Запись id='.$i.'. Адрес: '.iconv( 'UTF-8', 'Windows-1251', $row['adres']). ' Точка назначения '
.iconv( 'UTF-8', 'Windows-1251', $row['finish']).
 '. Имя  '.iconv( 'UTF-8', 'Windows-1251', $row['FIO']).  '. Контакты '.iconv( 'UTF-8', 'Windows-1251', $row['contacts']).
 '. Примечания ' .iconv( 'UTF-8', 'Windows-1251', $row['prim']).   '</p>';

   */

//}




 ?>


        <table > <tr >  <td width=3%></td>
            <td  width=38% valign="top" >

 <img src="av.jpg" alt="Smiley face">




          </td>
                  <td width=2%></td>
   <td  width=42%  valign="top" >
 <div class="he2">
         <p></p>        </div>

<h3 > Гомер Джэй Симпсон
<?php     while ($row = mysql_fetch_assoc($result)) {

     echo
     $row['login'] ;

       ?>
       </h3>
<p>

     <li>Перевозчик        </li>
 <li> Тип перевозок <?php
     echo    iconv( 'UTF-8', 'Windows-1251', $row['type'])    ;

       ?>
       </li>
 <li> Сроки <?php
     echo    iconv( 'UTF-8', 'Windows-1251', $row['date']) ;

       ?>   </li>    <li>
 Откуда: <?php
     echo    iconv( 'UTF-8', 'Windows-1251', $row['out'])  ;

       ?> </li>
 	<li> Куда <?php
     echo    iconv( 'UTF-8', 'Windows-1251', $row['in'])   ;

       ?> </li>


     	<li> Подробнее <?php
     echo    iconv( 'UTF-8', 'Windows-1251', $row['about'])  ;
          }
       ?> </li>



            </td>
             <td width=3% ></td>
  </tr>

  </table>


  </br>
  <!--      <p align=center>
<button class="btn btn-large btn-primary" type="button">Оставить заявку как грузоотправитель</button>
<button class="btn btn-large" type="button">Оставить заявку как перевозчик</button>
</p>     -->


     <a href="zai.php"><button class="btn btn-large btn-primary" type="button">Оставить заявку как грузоотправитель</button>   </a>
<a href="zai2.php"><button class="btn btn-large" type="button">Оставить заявку как перевозчик</button>               </a>












<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="js/bootstrap.min.js"></script>


<?php

}


?>


</body>

</html>