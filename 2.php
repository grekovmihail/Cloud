<?php

  $Zg=$_POST['Zg'];
  $_SESSION['Zg']=$Rus;
  if ($Zg==1)  {  ?>    <script type="text/javascript">
setTimeout('location.replace("viza.php")', 500);
</script> <?}

  else {    ?>  Беларусь
<?
}
   $Rus=$_POST['Zg'];
   include ("bd.php");
      include ("sv.php") ;




?>