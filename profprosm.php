       <?php
// вся процедура работает на сесиях. Именно в ней хранятся данные пользователя, пока он находится на сайте. Очень важно запустить их в самом начале странички!!!
session_start();
?>
<html>
  <head>
  <title>Профиль</title>
   <link href="bootstrap.min.css" rel="stylesheet">
   	   <meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />


            <style type="text/css">

        H3 {
    color: black; /* Синий цвет текста */
     font-size: 17pt; /* Размер надписи */
      text-decoration: none;
        font-style: italic; /* Курсивное начертание */
       /* padding-left:53px;   */
          }



          H5 {
    color: black; /* Синий цвет текста */
     font-size: 7pt; /* Размер надписи */

        font-style: italic; /* Курсивное начертание */   }






  </style>
</head>
  <body>
    <? echo "Вы вошли на сайт, как ".$_SESSION['login'];
        $id=  $_SESSION['id'];
    echo 'id='.$id;
                     $id= $_SERVER[REQUEST_URI];
                             $id=  substr ( $id, 3 )  ;

                                                  $iq= $_SERVER[REQUEST_URI];
                             $iq=  substr ( $iq, 3 )  ;




                                          $zeta=$id;

                                        //   echo 'zeta'. $zeta;
                                           $_SESSION['zeta'] = $zeta;
  //код страницы
     ?>


<?php

    include "menu.php";

          include ("bd.php");

                              //    $i=  $id;

  //  $result = mysql_query("SELECT * FROM prof where WHERE `id`=36",$db);
  //  $row=mysql_fetch_array($result);
        echo     $row['id'];

      echo     $row['name'];





      $query = sprintf("SELECT * FROM pro   where   id=$iq"
    );
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

 <img src="av.jpg" alt="Smiley face">


          </td>
                  <td width=2%></td>
   <td  width=42%  valign="top" >
 <div class="he2">
         <p></p>        </div>

<h3 >


<?              $query = sprintf("SELECT * FROM users
    WHERE id=$iq  ");
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
             <h3 >

                   <?

           while ($row = mysql_fetch_assoc($result)) {
           $login=  $row['login'];
  echo  $login;




                          }   ?>      </h3>




       <?php
      echo
     $rogin ;
      ?>


       </h3>



<?php

          include ("bd.php");



    $result = mysql_query("SELECT * FROM pro where WHERE `id`=$iq",$db);
  //  $row=mysql_fetch_array($result);
        echo     $row['id'];

      echo     $row['name'];




      $query = sprintf("SELECT * FROM pro
    WHERE id=$iq");
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


       ?>

   <h4>   Перевозки      </h4>


  <p>
       <?php
      echo
     $row['name'] ;
      ?> </p>
 <p>  <?php
     echo     $row['email'] ;

       ?>  </p>
       <p>  <?php
     echo     $row['mesto']   ;

       ?> </p>

       <p>
 Тип перевозок: <?php
     echo    $row['type']  ;
                               echo " ";
       ?> </p>

        <p>
Тип грузов: <?php
     echo    $row['gruz']  ;
                                                echo " ";

       ?> </p>


       <p>
Цена перевозки: <?php
     echo    $row['cena']  ;

       ?> </p>


       <p>
 Города перевозок: <?php
     echo    $row['goroda']  ;

       ?> </p>

     <p>
  <?php
     echo    $row['telephone']  ;

       ?> </p>



       <p> <?php
     echo    $row['about'] ;






      ?>






    <?
      }
       ?> </p>









  </br>
  <!--      <p align=center>
<button class="btn btn-large btn-primary" type="button">Оставить заявку как грузоотправитель</button>
<button class="btn btn-large" type="button">Оставить заявку как перевозчик</button>
</p>     -->











<?php

          include ("bd.php");



    $result = mysql_query("SELECT * FROM prof2 where WHERE `id`=$iq",$db);
  //  $row=mysql_fetch_array($result);
        echo     $row['id'];

      echo     $row['name'];




      $query = sprintf("SELECT * FROM prof2
    WHERE id=$iq");
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




      <p>



<p>

 <h3 >

<?php     while ($row = mysql_fetch_assoc($result)) {








    ?>
           <h4 >

Грузоотправитель   </h4>  </h3>

     <?

     echo
     $row['name'] ;

       ?>




       </p>
 <p>  <?php
     echo   $row['email'];

       ?>   </p>     <p>
  <?php
     echo   $row['telephone'];

       ?> </p>
 	<p> <?php
     echo  $row['mesto']  ;

       ?> </p>


       <p>  <?php
     echo    $row['about'] ;
          }
       ?> </p>

         <h3>

   <a href="mail.php" align=center>Написать письмо            </a>
               </h3>


                 </td>
             <td width=3% ></td>
  </tr>

  </table>



















 <br>

  <p></p>
     <p></p>
  <p></p>

      <div class="navbar-inner">
          <div class="container">
     <p align=center>
<a href="zai.php"><button class="btn btn-large btn-primary" type="button">Оставить заявку как грузоотправитель</button>   </a>
<a href="zai2.php"><button class="btn btn-large" type="button">Оставить заявку как перевозчик</button>               </a>
</p>

       </div>      </div>









<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="js/bootstrap.min.js"></script>




</body>

</html>