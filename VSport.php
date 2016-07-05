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

  <form action="14.php" method="post">
Любите активный отдых?

       <input type="checkbox" name="vs"  value="Зимний">  Зимний
                 <input type="checkbox" name="vs"  value="Зимний">   Летний


</body>

</html>