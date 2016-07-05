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


   ?>


         <div class="navbar">
        <div class="navbar-inner">
        <a class="brand" href="#">Лэйбл</a>

        <ul class="nav nav-tabs">
        <ul class="nav">
        <li class="active"><a href="#">Профиль</a></li>
        <li><a href="#">Новые перевозки</a></li>
        <li><a href="#">Новые перевозчики</a></li>
        <li ><a href="logout.php" align=right>Выход</a></li>
        </ul>
        </div>
        </div>


 <!--       <?php
         /*

   // ваш адрес где находится, хостится ваша база данных
$sdd_db_host='localhost';
// Имя базы данных с которой вы хотите работать, так как их может быть множество
$sdd_db_name='cl';
// логин доступ к базе данных
$sdd_db_user='root';
// пароль доступа к базе данных
$sdd_db_pass='45091847';



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


$result=mysql_query('SELECT * FROM `users`');
// берем результаты из каждой строки



while($row=mysql_fetch_array($result))
{ // выводим данные
//$row['prim'] =iconv( 'UTF-8', 'Windows-1251', $row ['prim']);
//$row['adres','finish', 'FIO', 'contacts','prim'] =iconv( 'UTF-8', 'Windows-1251', $row );

	$i++;
   /*echo   '<p>Запись id='.$i.'. Адрес: '.iconv( 'UTF-8', 'Windows-1251', $row['adres']). ' Точка назначения '
.iconv( 'UTF-8', 'Windows-1251', $row['finish']).
 '. Имя  '.iconv( 'UTF-8', 'Windows-1251', $row['FIO']).  '. Контакты '.iconv( 'UTF-8', 'Windows-1251', $row['contacts']).
 '. Примечания ' .iconv( 'UTF-8', 'Windows-1251', $row['prim']).   '</p>';



}

     */


 ?>
        -->








        <table > <tr >  <td width=3%></td>
            <td  width=38% valign="top" >

 <img src="av.jpg" alt="Smiley face">




          </td>
                  <td width=2%></td>
   <td  width=42%  valign="top" >
 <div class="he2">
         <p></p>        </div>
   <!--
<h3 > Гомер Джэй Симпсон</h3>
<p>

     <li>Перевозчик  </li>
 <li> Легковые,грузовые перевозки  </li>
 	<li> Московская область  </li>



      -->




    <form action="save1.php" method="post">
<!--**** save_user.php - это адрес обработчика. То есть, после нажатия на кнопку "Зарегистрироваться",
данные из полей отправятся на страничку save_user.php методом "post" ***** -->
  <p>
    <label>Имя:*<br></label>
    <input name="name" type="text" size="150" maxlength="1500">
  </p>

    <p>
    <label>Ваш e-mail:*<br></label>
    <input name="email" type="text" size="15" maxlength="15">
  </p>
<!--**** В текстовое поле (name="login" type="text") пользователь вводит свой логин ***** -->
  <p>
    <label>Телефон: <br></label>
    <input name="telephone" type="text" size="15" maxlength="15">
  </p>

    <p>
    <label>Местоположение:<br></label>
    <input name="mesto" type="text" size="15" maxlength="15">
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