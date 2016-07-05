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
  ?>         <h4> <a href="vh.php"> Входящие  </a>  <a href="otp.php"> /  Отправленные </a>   </h4>   <?



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
                       $_SESSION['idq'] = $idq;
                 echo "
                <a href='http://cloud-logistics.ru/id$idq'> $otkogo  </a>     "
                ?>
 </p>


 <p>  <?php
  $read= $row['read'];

   if ($read=="no")
 {

 ?>

<h5>   <?  echo     $row['text'] ;   ?>    </h5>

 <?

}


//{


//код страницы

    else
{




     echo     $row['text'] ;
      }
       ?>   </p>
       	<p>  <?php
     echo     $row['date']   ;
          $q=$row['id']

       ?> </p>


         <?
                       ;
                 echo "
                <a href='http://cloud-logistics.ru/m$q'> просмотреть </a>     "
                ?>



       <?
         }
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
     <p align=center>     <ul>
<a href="zai.php"><button class="btn btn-large btn-primary" type="button">Оставить заявку как грузоотправитель</button>   </a>
<a href="zai2.php"><button class="btn btn-large" type="button">Оставить заявку как перевозчик</button>               </a>
</ul> </p>

       </div>      </div>    </div>




<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="js/bootstrap.min.js"></script>

<?php


}


?>


</body>

</html>