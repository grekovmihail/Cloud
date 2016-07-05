<?php
session_start();
  $Sport=$_POST['Sport'];
  $_SESSION['Sport']=$Rus;
  if ($TR==1)  {  ?>    <script type="text/javascript">
setTimeout('location.replace("Sport.php")', 0);
</script> <?}

  else {    ?>  <script type="text/javascript">
setTimeout('location.replace("comf.php")', 0);
</script>
<?
}

   $Rus=$_POST['Sport'];
   include ("bd.php");



?>