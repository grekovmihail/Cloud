<?php
session_start();
  $tih=$_POST['tih'];
  $_SESSION['tih']=$tih;
  ?>    <script type="text/javascript">
setTimeout('location.replace("trans.php")', 0);
</script> <?


     $Rus=$_POST['tih'];
   include ("bd.php");



?>