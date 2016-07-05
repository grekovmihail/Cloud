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

  <form action="6.php" method="post">
      Боитесь ли вы перелетов?


       <input type="checkbox" name="avia"  value="1">    Да      </td>    <td width=1%>
                <td> <input type="checkbox" name="avia"  value="0">   Нет   <input type="submit" name="submit" value="Далее">


</body>

</html>