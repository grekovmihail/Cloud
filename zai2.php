<?php
// вся процедура работает на сесиях. Именно в ней хранятся данные пользователя, пока он находится на сайте. Очень важно запустить их в самом начале странички!!!
session_start();
?>
<html>

<head>
  <title>Профиль</title>
   <link href="bootstrap.min.css" rel="stylesheet">
         <meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
</head>

<body>



          <?      echo "Вы вошли на сайт, как ".$_SESSION['login'];
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




        <table > <tr >  <td width=3%></td>
            <td  width=38% valign="top" >

          </td>
                  <td width=2%></td>
   <td  width=42%  valign="top" >
 <div class="he2">
         <p></p>        </div>





    <form action="save_zai2.php" method="post">
<!--**** save_user.php - это адрес обработчика. То есть, после нажатия на кнопку "Зарегистрироваться",
данные из полей отправятся на страничку save_user.php методом "post" ***** -->
  <p>
    <label>Сроки:*<br></label>
    <input name="date" type="text" size="150" maxlength="1500">
  </p>

    <p>
    <label>Район:*<br></label>
    <input name="mesto" type="text" size="15" maxlength="15">
  </p>
<!--**** В текстовое поле (name="login" type="text") пользователь вводит свой логин ***** -->
  <p>

    <p>
    <label>Типы грузов: <br></label>
    <input name="type" type="text" size="15" maxlength="15">
  </p>






      <p>
    <label>O:<br></label>
    <input name="about" type="text" size="15" maxlength="15">
  </p>
<!--**** В поле для паролей (name="password" type="password") пользователь вводит свой пароль ***** -->
<p>
<input type="submit" name="submit" value="Сохранить">

<!--**** Кнопочка (type="submit") отправляет данные на страничку save_user.php ***** -->
</p></form>















            </td>
             <td width=3% ></td>
  </tr>

  </table>


  </br>
        <p align=center>
<button class="btn btn-large btn-primary" type="button">Оставить заявку как грузоотправитель</button>
<button class="btn btn-large" type="button">Оставить заявку как перевозчик</button>
</p>















<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="js/bootstrap.min.js"></script>


       <?php

}


?>


</body>

</html>