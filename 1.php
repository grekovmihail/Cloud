<?php
session_start();
  $Rus=$_POST['Rus'];
  $_SESSION['Rus']=$Rus;
  if ($Rus==1)  {  ?>    <script type="text/javascript">
setTimeout('location.replace("pl.php")', 0);
</script> <?}










  else {    ?>
   <script type="text/javascript">
setTimeout('location.replace("UnRus.php")', 0);
</script>
<?
}

      include ("bd.php");
      include ("sv.php") ;
















?>