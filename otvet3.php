      <?php
// вся процедура работает на сесиях. Именно в ней хранятся данные пользователя, пока он находится на сайте. Очень важно запустить их в самом начале странички!!!
session_start();


?>
<html>

<head>
  <title>Отправленные</title>
   <link href="bootstrap.min.css" rel="stylesheet">
   	   <meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
       <meta http-equiv="Refresh" content="300" />
</head>

<body>




       <form action="search.php" method="post">


  <input name="search" input type="text" class="search-query" placeholder="Search">


                    </form>




  <style type="text/css">

        H4 {
    color: black; /* Синий цвет текста */
     font-size: 11pt; /* Размер надписи */
      text-decoration: none;
        font-style: italic; /* Курсивное начертание */
           margin : 15px;
                 padding: 10px;
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




       <form action="search.php" method="post">
<!--**** save_user.php - это адрес обработчика. То есть, после нажатия на кнопку "Зарегистрироваться",
данные из полей отправятся на страничку save_user.php методом "post" ***** -->




      <p>
    <label>O:<br></label>
    <input name="sea" type="text" size="15" maxlength="15">
  </p>
<!--**** В поле для паролей (name="password" type="password") пользователь вводит свой пароль ***** -->
<p>
<input type="submit" name="submit" value="Сохранить">

<!--**** Кнопочка (type="submit") отправляет данные на страничку save_user.php ***** -->
</p></form>





<?php





























          include ("bd.php");


             ?>         <h4> <a href="vh.php"> Входящие  </a>  <a href="otp.php"> /  Отправленные </a>   </h4>






        <table > <tr >  <td width=13%></td>

                    <td   valign="top" >
 <div class="he2">
         <p></p>        </div>

<h3 >



       </h3>


     <?

        $idq=  $_SESSION['idq'];

       $query = sprintf("SELECT * FROM users
    WHERE id=$idq   ");
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





    Кому:                <?
         while ($row = mysql_fetch_assoc($result)) {
    $zeta=$_SESSION['zeta'];
     $kom=    $row['login'];
                       }
                       //$_SESSION['idq'] = $idq;
                 echo "
                <a href='http://cloud-logistics.ru/id$idq'> $kom  </a>     "
                ?>
<p>

   <HR WIDTH="80%" SIZE="3">

 </p>

          <?php

   $zeta=$_SESSION['zeta'];
  // $zeta=5;


// Проверяем, пусты ли пересменные логина и id пользователя


                   $_SESSION['zeta'] = $zeta;
    //   $otkogo=12;
     ?>

<form action="saveotv.php" method="post">
<!--**** testreg.php - это адрес обработчика. То есть, после нажатия на кнопку "Войти", данные из полей отправятся на страничку testreg.php методом "post" ***** -->

<!--**** В текстовое поле (name="login" type="text") пользователь вводит свой логин ***** -->
  <p align center>
    <label>Текст:<br></label>




    <p><textarea rows="10" cols="2500000"  name="text" size="150" style="width: 70%; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box;"></textarea></p>
    <p><input type="submit" value="Отправить"></p>
  </form>







  </p>
<!--**** В поле для паролей (name="password" type="password") пользователь вводит свой пароль ***** -->
<p>

<!--**** Кнопочка (type="submit") отправляет данные на страничку testreg.php ***** -->

</p></form>
<br>


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