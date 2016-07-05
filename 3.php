<?php
session_start();
  $viza=$_POST['viza'];
  $_SESSION['viza']=$viza;
  ?>    <script type="text/javascript">
setTimeout('location.replace("pl.php")', 0);
</script> <?
  $Rus=$_POST['viza'];


              include ("sv.php") ; 

?>