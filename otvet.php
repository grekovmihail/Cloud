<?php
// вся процедура работает на сесиях. Именно в ней хранятся данные пользователя, пока он находится на сайте. Очень важно запустить их в самом начале странички!!!
session_start();
?>
<html>
<head>
<title>Написать</title>
</head>
<body>
   <?php

   $zeta=$_SESSION['zeta'];
  // $zeta=5;
          echo  $zeta;
     echo "Вы вошли на сайт, как ".$_SESSION['login'];

// Проверяем, пусты ли пересменные логина и id пользователя
      echo $login;

                   $_SESSION['zeta'] = $zeta;
    //   $otkogo=12;
     ?>

<form action="saveotv.php" method="post">
<!--**** testreg.php - это адрес обработчика. То есть, после нажатия на кнопку "Войти", данные из полей отправятся на страничку testreg.php методом "post" ***** -->

<!--**** В текстовое поле (name="login" type="text") пользователь вводит свой логин ***** -->
  <p align center>
    <label>Текст:<br></label>


    <input name="text" type="textarea" size="150" cols="35" rows="5" wrap="virtual"  maxlength="1500">
     <form action="textarea1.php" method="post">

    <p><textarea rows="10" cols="45" name="text"></textarea></p>
    <p><input type="submit" value="Отправить"></p>
  </form>







  </p>
<!--**** В поле для паролей (name="password" type="password") пользователь вводит свой пароль ***** -->
<p>
<input type="submit" name="submit" value="Отправить">
<!--**** Кнопочка (type="submit") отправляет данные на страничку testreg.php ***** -->

</p></form>
<br>






</body>
</html>
