      <?php
// вся процедура работает на сесиях. Именно в ней хранятся данные пользователя, пока он находится на сайте. Очень важно запустить их в самом начале странички!!!
session_start();


?>
<html>

<head>
  <title>Входящие</title>
   <link href="bootstrap.min.css" rel="stylesheet">
   	   <meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
       <meta http-equiv="Refresh" content="300" />
</head>

<body>

           <style type="text/css">

        H4 {
    color: black; /* Синий цвет текста */
     font-size: 11pt; /* Размер надписи */
      text-decoration: none;
        font-style: italic; /* Курсивное начертание */
           margin : 15px;
                 padding-left: 41px;
 }

          a {
    color: black; /* Синий цвет текста */



   }

     a:hover {
    text-decoration: underline; /* Добавляем подчеркивание
                                   при наведении курсора мыши на ссылку */

  </style>



  <? echo "Вы вошли на сайт, как ".$_SESSION['login'];
        $id=  $_SESSION['id'];
    echo ' id='.$id;
        include "menu.php";


 if (empty($_SESSION['login']) or empty($_SESSION['id']))
 {


echo "Вы не авторизированы  error!!!";
}


//{


//код страницы

    else
{







   ?>


<?php

          include ("bd.php");


                   $m= $_SERVER[REQUEST_URI];
                             $m=  substr ( $m, 2 )  ;




    $query = sprintf("SELECT * FROM mail
    WHERE id=$m   ");
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

                  <td width=50%></td>
   <td   valign="top" >
 <div class="he2">
         <p></p>        </div>

<h3 >
<?php     while ($row = mysql_fetch_assoc($result)) {

    Входящие

       ?>
       </h3>
<p>

   <HR WIDTH="100%" SIZE="3">

    От кого:                <?
                       $idq= $row['idq'];
                      $otkogo= $row['otkogo'];
                      $_SESSION['komu'] = $idq;
                       $_SESSION['idq'] = $idq;
                 echo "
                <a href='http://cloud-logistics.ru/id$idq'> $otkogo  </a>     "
                ?>
 </p>


 <p>  <?php
  $read= "yes";

 echo     $row['text'] ;

    $text= $row['text']


       ?>   </p>
       	<p>  <?php
     echo     $row['date']   ;
         $date=$row['date'] ;
       ?> </p>


         <?
                       ;
                 echo "
                <a href='otv.php'> ответить </a>     "
                ?>



       <?
         }


           $komu= $_SESSION['id'];


           $query = "DELETE FROM `mail` WHERE `id`=$m";
  mysql_query($query) or die(mysql_error());

         $query2 = "INSERT INTO mail
VALUES('$m','$idq','$otkogo','$text','$komu','$date','$kom','$read')";

$result2 = MYSQL_QUERY($query2);



    $komu= $_SESSION['otkogo'];






       ?>



            </td>
             <td width=3% ></td>
  </tr>

  </table>


  </br>
  <!--      <p align=center>
<button class="btn btn-large btn-primary" type="button">Оставить заявку как грузоотправитель</button>
<button class="btn btn-large" type="button">Оставить заявку как перевозчик</button>
</p>     -->




                 <br>

  <p></p>
     <p></p>
  <p></p>

  <div class="navbar-fixed-bottom row-fluid">
      <div class="navbar-inner">
          <div class="container">
     <p align=center>
<a href="zai.php"><button class="btn btn-large btn-primary" type="button">Оставить заявку как грузоотправитель</button>   </a>
<a href="zai2.php"><button class="btn btn-large" type="button">Оставить заявку как перевозчик</button>               </a>
</p>

       </div>      </div>    </div>




<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="js/bootstrap.min.js"></script>

<?php


}


?>


</body>

</html>