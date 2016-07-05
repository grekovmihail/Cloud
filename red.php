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





  <style type="text/css">






    h3 {
    color: black; /* Синий цвет текста */
      padding-left: 20px;
           margin: 15px
    font-size: 11pt; /* Размер надписи */
      text-decoration: none;
        font-style: italic; /* Курсивное начертание */

   }

     a:hover {
    text-decoration: underline;

  </style>






          <?      echo "Вы вошли на сайт, как ".$_SESSION['login'];
        $id=  $_SESSION['id'];
    echo 'id='.$id;

 if (empty($_SESSION['login']) )
       {
echo "Вы не авторизированы  error!!!";
}
   else


          include ("menu.php");
  ?>         <h3> <a href="red.php"> Перевозчик  </a>  <a href="red2.php"> /  Грузоотправитель </a>   </h3>

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
   <td  width=32%  valign="top" >
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
    <label>Перевозчик<br></label>

  </p>
  <p>
    <label>Название:*<br></label>
    <input name="name" type="textarea" size="1500" maxlength="1500">
  </p>
   <p>
      <label>Адрес:<br></label>
    <input name="mesto" type="textarea" size="1500" maxlength="1500">
  </p>

       <label>x:<br></label>
    <input name="X" type="textarea" size="1500" maxlength="1500">
  </p>
       <label>y:<br></label>
    <input name="Y" type="textarea" size="1500" maxlength="1500">
  </p>




    <p>
        <label>Тип перевозок:<br></label>
         <table> <tr>  <td>
        <input type="checkbox" name="type0"  value=" Авто менее 3т ">   Авто менее 3т          </td>    <td width=2%> </td>
                <td> <input type="checkbox" name="type1"  value=" Авто более 3т ">   Авто более 3т    </td>
                                         </tr><tr>
                 <td>  <input type="checkbox" name="type"  value="ж/д">   ж/д   </td>     <td width=1%> </td>
        <td> <input type="checkbox" name="type2"  value="авиа ">  авиа     </td>
         </tr>
        <tr>
         <td>  <input type="checkbox" name="type3"  value=" Речной ">   Речной   </td>     <td width=1%> </td>
        <td> <input type="checkbox" name="type4"  value=" Морской ">  Морской     </td>
                 </tr>
           </table>

  <!--  <input name="mesto" type="textarea" size="1500" maxlength="1500">     -->
  </p>
    <p>
        <label>Тип грузов:<br></label>
         <table> <tr>  <td>
        <input type="checkbox" name="gruz0"  value=" Стандартные грузы  ">    Стандартные грузы       </td>    <td width=1%> </td>
                <td> <input type="checkbox" name="gruz1"  value=" Нестандартные грузы ">   Нестандартные грузы   </td>
                                         </tr><tr>
                 <td>  <input type="checkbox" name="gruz2"  value=" Скоропортящиеся грузы ">   Скоропортящиеся грузы  </td>     <td width=1%> </td>
        <td> <input type="checkbox" name="gruz3"  value=" Живые грузы ">  Живые грузы     </td>

                 </tr>

                 <tr>
                 <td>  <input type="checkbox" name="gruz4"  value=" Наливные грузы (жидкие) ">   Наливные грузы (жидкие)  </td>     <td width=1%> </td>
        <td> <input type="checkbox" name="gruz5"  value=" Сборные грузы ">  Сборные грузы  </td>

                 </tr>
                     <tr>
                 <td>  <input type="checkbox" name="gruz6"  value=" Негабаритные грузы ">   Негабаритные грузы  </td>     <td width=1%> </td>
        <td> <input type="checkbox" name="gruz7"  value=" Опасные грузы ">  Опасные грузы  </td>

                 </tr>



           </table>
               <p>
    <label>Цена перевозки<br></label>
    <input name="cena" type="textarea" size="1500" maxlength="1500">
  </p>
                 <p>
    <label>Города перевозок<br></label>
    <input name="goroda" type="textarea" size="1500" maxlength="1500">
  </p>



  <!--  <input name="mesto" type="textarea" size="1500" maxlength="1500">     -->
  </p>
    <p>
    <label>Ваш e-mail:*<br></label>
    <input name="email" type="textarea" size="1500" maxlength="1500">
  </p>
<!--**** В текстовое поле (name="login" type="text") пользователь вводит свой логин ***** -->
  <p>
    <label>Телефон: <br></label>
    <input name="telephone" type="textarea" size="1500" maxlength="1500">
  </p>

    <p>



      <p>
    <label>O компании:<br></label>
    <input name="about" type="textarea" size="1500" maxlength="1500">
  </p>

      <p>  Юр. данные
    <label>Юр. адрес:<br></label>
    <input name="uadres" type="textarea" size="1500" maxlength="1500">
  </p>
       <p>
    <label>Наименование:<br></label>
    <input name="uname" type="textarea" size="1500" maxlength="1500">
  </p>
  <p>
    <label>ИНН:<br></label>
    <input name="inn" type="textarea" size="1500" maxlength="1500">
  </p>
  <p>
    <label>ОГРН:<br></label>
    <input name="ogrn" type="textarea" size="1500" maxlength="1500">
  </p>
              <p>
    <label>ОКПО:<br></label>
    <input name="okpo" type="textarea" size="1500" maxlength="1500">
  </p><p>
    <label>КПП:<br></label>
    <input name="kpp" type="textarea" size="1500" maxlength="1500">
  </p><p>
    <label>Основной ОКВЭД:<br></label>
    <input name="oo" type="textarea" size="1500" maxlength="1500">
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


  </br>  <!--  <p align=center>
         <a href="zai.php"><button class="btn btn-large btn-primary" type="button">Оставить заявку как грузоотправитель</button>   </a>
<a href="zai2.php"><button class="btn btn-large" type="button">Оставить заявку как перевозчик</button>               </a>
                       </p>     -->

<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="js/bootstrap.min.js"></script>





</body>

</html>