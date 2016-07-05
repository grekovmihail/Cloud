<?php
session_start();
  $TR=$_POST['TR'];
  $_SESSION['TR']=$Rus;
  if ($TR==1)  {  ?>    <script type="text/javascript">
setTimeout('location.replace("Sport.php")', 0);
</script> <?}

  else {    ?>  <script type="text/javascript">
setTimeout('location.replace("vidTr.php")', 0);
</script>
<?
}


    $Rus=$_POST['TR'];
   include ("bd.php");


?>