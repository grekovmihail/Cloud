<?php
session_start();
  $Sport=$_POST['Sport'];
  $_SESSION['Sport']=$Rus;
  if ($Sport==1)  {  ?>    <script type="text/javascript">
setTimeout('location.replace("VidSport.php")', 0);
</script> <?}

  else {    ?>  <script type="text/javascript">
setTimeout('location.replace("vidTr.php")', 0);
</script>
<?
}


    $Rus=$_POST['Sport'];
   include ("bd.php");


?>