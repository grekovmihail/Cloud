<?php
// вся процедура работает на сесиях. Именно в ней хранятся данные пользователя, пока он находится на сайте. Очень важно запустить их в самом начале странички!!!
session_start();
?>
<html>
<head>
<title>Вход</title>
 <link href="bootstrap.min.css" rel="stylesheet">
   	   <meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />


</head>
<body>
     <style type="text/css">

        H3 {
    color: black; /* Синий цвет текста */
     font-size: 17pt; /* Размер надписи */
      text-decoration: none;
        font-style: italic; /* Курсивное начертание */   }

          H5 {
    color: black; /* Синий цвет текста */
     font-size: 7pt; /* Размер надписи */

        font-style: italic; /* Курсивное начертание */   }


          a {
    color: black; /* Синий цвет текста */
      padding: 5px;

    font-size: 17pt; /* Размер надписи */
      text-decoration: none;
        font-style: italic; /* Курсивное начертание */

   }

     a:hover {
    text-decoration: underline; /* Добавляем подчеркивание
                                   при наведении курсора мыши на ссылку */

                             label      {
    width: 3000%; /* Ширина в процентах */
    height: 300px; /* Высота в пикселах */
   }

  </style>
  <br><br>

<h3 align=center>Вход на сайт   <a href="reg.php"> /  Регистрация </a>   </h3>
<form action="testreg.php" method="post">
<!--**** testreg.php - это адрес обработчика. То есть, после нажатия на кнопку "Войти", данные из полей отправятся на страничку testreg.php методом "post" ***** -->

<?php
// Проверяем, пусты ли пересменные логина и id пользователя
if (empty($_SESSION['log']) or empty($_SESSION['id']))
{
?>
<p align=center>
    <label>Ваш логин:<br></label>
    <input name="log" type="text" size="15" maxlength="15">
  </p>
<!--**** В текстовое поле (name="login" type="text") пользователь вводит свой логин ***** -->
  <p align=center>
    <label>Ваш пароль:<br></label>
    <input name="password" type="password" size="15" maxlength="15">
  </p>
<!--**** В поле для паролей (name="password" type="password") пользователь вводит свой пароль ***** -->

<!--**** ссылка на регистрацию, ведь как-то же должны гости туда попадать ***** -->

<H5  align=center>
<input type="submit" class="btn btn-large btn-primary" name="submit" value="Вход">     </H5>

<!--**** Кнопочка (type="submit") отправляет данные на страничку save_user.php ***** -->


</p></form>
<br>
<?php
}
else
   {
   // Если не пусты, то мы выводим ссылку
 //   echo "Вы вошли на сайт, как ".$_SESSION['login'];


 //    echo "Вы успешно вошли на сайт!  ";
      ?>
                <script type="text/javascript">
setTimeout('location.replace("moder.php")', 0);
</script>
  <?php
   }
?>

<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>
</html>

