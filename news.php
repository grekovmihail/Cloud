      <?php
// вся процедура работает на сесиях. Именно в ней хранятся данные пользователя, пока он находится на сайте. Очень важно запустить их в самом начале странички!!!
session_start();
?>
<html>
 <html lang="en">

<head>
  <title>Новости</title>
   <link href="bootstrap.min.css" rel="stylesheet">
    <meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
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
                include "menu.php";






   ?>


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

  //  $result = mysql_query("SELECT * FROM prof where WHERE `id`=2",$db);
  //  $row=mysql_fetch_array($result);
    //    echo     $row['id'];

   //   echo     $row['name'];




      $query = sprintf("SELECT * FROM zai ORDER BY vre DESC");
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


        <table > <tr >  <td width=3%></td>
            <td  width=38% valign="top" >

          </td>
                  <td width=2%></td>
   <td  width=42%  valign="top" >
 <div class="he2">
         <p></p>        </div>


<?php     while ($row = mysql_fetch_assoc($result)) {   ?>
 <h3 >
    <HR WIDTH="80%" SIZE="3">

  <?php

  $login=$row['login'];
      $d=$row['d'];


 echo "
                <a href='http://cloud-logistics.ru/id$d'> $login  </a>     "   ;
       ?>
       </h3>
<p>
  <h5>
     <p>Перевозчик        </p>
 <p> Тип перевозок: <?php
     echo     $row['type']   ;

       ?>
      </p>
 <p> Сроки: <?php
     echo    $row['date'] ;

       ?>  </p>   <p>
 Откуда: <?php
     echo   $row['out'] ;

       ?> </p>
   <p> Куда: <?php
     echo   $row['in']   ;

       ?> </p>


      <p> Подробнее: <?php
     echo  $row['about'] ;

       ?>

        <p>  <?php
     echo     $row['vre'] ;
                }
       ?>   </p>




       </p>
         </h5>
          </br>

            </td>
             <td width=3% ></td>
  </tr>

  </table>


  </br>
  <!--
<button class="btn btn-large btn-primary" type="button">Оставить заявку как грузоотправитель</button>
<button class="btn btn-large" type="button">Оставить заявку как перевозчик</button>
     -->

         <p align=center>
     <a href="zai.php"><button class="btn btn-large btn-primary" type="button">Оставить заявку как грузоотправитель</button>   </a>
<a href="zai2.php"><button class="btn btn-large" type="button">Оставить заявку как перевозчик</button>               </a>

      </p>

<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="js/bootstrap.min.js"></script>


<?php

}

?>

</body>

</html>