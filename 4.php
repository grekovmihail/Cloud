<?php

  $pl=$_POST['pl'];

  if ($pl==1)  {  ?>    <script type="text/javascript">
setTimeout('location.replace("temp.php")', 0);
</script> <?}

  else {    ?>   <script type="text/javascript">
setTimeout('location.replace("avia.php")', 0);
</script>
<?
}
     $Rus=$_POST['pl'];


        include ("bd.php");
    //$result = mysql_query("SELECT * FROM zp where WHERE `Rus`=$Rus",$db);
    // $query = sprintf("SELECT * FROM zp
  // WHERE `Rus`=$Rus");




    $query = sprintf("SELECT * FROM save      WHERE `pl`=$pl
    ");
  //  mysql_real_escape_string($firstname),
  //  mysql_real_escape_string($lastname));

// Выполняем запрос
$result = mysql_query($query);




    $result = mysql_query($query);
    if (!$result) {
    $message  = 'Неверный запрос: ' . mysql_error() . "\n";
    $message .= 'Запрос целиком: ' . $query;
    die($message);
}
 ?>



<?php     while ($row = mysql_fetch_assoc($result)) {

     echo
     $row['name'] ;
                  $name=      $row['name'] ;
                  $id= $row['id'] ;


                        $avia= $row['avia'] ;

                         $ex=$row['ex'] ; $tih= $row['tih'] ; $TR= $row['TR'] ; $Sport= $row['Sport'] ;


                         $Rus= $row['Rus'] ; $Zg=$row['Zg'] ; $viza=$row['viza'] ; $pl=$row['pl'] ; $t=$row['t'] ;

           $query = "DELETE FROM `save` ";
  mysql_query($query) or die(mysql_error());
  
    $query2 = "INSERT INTO save
VALUES('$id','$name','$Rus','$Zg','$viza','$pl','$t','$avia','$ex','$tih','$TR','$Sport')";

    $result2 = MYSQL_QUERY($query2);




      }







?>