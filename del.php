<?php
// вся процедура работает на сесиях. Именно в ней хранятся данные пользователя, пока он находится на сайте. Очень важно запустить их в самом начале странички!!!
session_start();
?>

      <script type="text/javascript">
setTimeout('location.replace("profil.php")', 500);
</script>
<?php




//$id=2;
    include ("bd.php");// файл bd.php должен быть в той же папке, что и все остальные, если это не так, то просто измените путь

           $query = "DELETE FROM `zai`";
  mysql_query($query) or die(mysql_error());


     ?>