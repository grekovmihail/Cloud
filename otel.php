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
  <h1> Какой отель вы хотите? </h1>

  <form action="16.php" method="post">


       <input type="checkbox" name="ot"  value="1">  1
                 <input type="checkbox" name="ot"  value="2">   2
                        <input type="checkbox" name="ot"  value="3">  3
                 <input type="checkbox" name="ot"  value="4">   4
                        <input type="checkbox" name="ot"  value="5">  5


</body>

</html>