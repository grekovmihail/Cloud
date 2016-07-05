<?php
session_start();
  $Sport=$_POST['Sport'];
  $_SESSION['Sport']=$Sport;
  if ($Sport==1)  {  ?>    <script type="text/javascript">
setTimeout('location.replace("otel.php")', 0);
</script> <?}

  else {    ?>  <script type="text/javascript">
setTimeout('location.replace("bud.php")', 0);
</script>
<?
}



  $Rus=$_POST['Sport'];
   include ("bd.php");

?>