<!DOCTYPE HTML>
             <?php
// вся процедура работает на сесиях. Именно в ней хранятся данные пользователя, пока он находится на сайте. Очень важно запустить их в самом начале странички!!!
session_start();
?>
<html>

<head>
  <title>Экспертная система для выбора места путушествия</title>
      <meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
</head>

<body>
  <h1> Экспертная система для выбора места путушествия </h1>

  <form action="12.php" method="post">
Что вы предпочитаете?

       <input type="checkbox" name="tih"  value="1">   Авиаперелет
                 <input type="checkbox" name="tih"  value="0">   Ж/д транспорт
 <input type="checkbox" name="tih"  value="2"> Водный транспорт


</body>

</html>