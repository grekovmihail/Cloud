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


        $zeta=$_SESSION['komu'];
                     $_SESSION['zeta']=$_SESSION['komu']; 

    $query = sprintf("SELECT * FROM users
    WHERE id=$zeta  ");
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


        <table > <tr >  <td width=13%></td>

   <td   valign="top" >
 <div class="he2">
         <p></p>        </div>

    Кому:                <?
     while ($row = mysql_fetch_assoc($result)) {
   $kom=    $row['login'];
                          }
                          $_SESSION['kom']=$kom;

                       //$_SESSION['idq'] = $idq;
                 echo "
                <a href='http://cloud-logistics.ru/id$zeta'> $kom </a>     "


                ?>
 </p>


<h3 >


       </h3>
<p>

   <HR WIDTH="80%" SIZE="3">

       <form action="savemail.php" method="post">
<!--**** testreg.php - это адрес обработчика. То есть, после нажатия на кнопку "Войти", данные из полей отправятся на страничку testreg.php методом "post" ***** -->

<!--**** В текстовое поле (name="login" type="text") пользователь вводит свой логин ***** -->
  <p align center>





    <p><textarea rows="10" cols="2500000"  name="text" size="150" style="width: 70%; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box;"></textarea></p>
    <p><input type="submit" value="Отправить"></p>
  </form>


            </td>

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