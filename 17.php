<?php
session_start();
  $Sport=$_POST['TR'];
  $_SESSION['TR']=$Rus;
  if ($TR==1)  {  ?>    <script type="text/javascript">
setTimeout('location.replace("itog.php")', 0);
</script> <?}

  else {    ?>  <script type="text/javascript">
setTimeout('location.replace("pit.php")', 0);
</script>
<?
}


   // $Rus=$_POST['Zg'];
   //include ("bd.php");


?>