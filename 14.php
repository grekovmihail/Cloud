<?php
session_start();
  $Sport=$_POST['Sport'];
  $_SESSION['Sport']=$Sport;
   ?>  <script type="text/javascript">
setTimeout('location.replace("comf.php")', 0);
</script>
  <?
     $Rus=$_POST['Sport'];
   include ("bd.php");




?>