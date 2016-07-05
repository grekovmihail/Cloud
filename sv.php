   <meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
<?php
        include ("bd.php");
    //$result = mysql_query("SELECT * FROM zp where WHERE `Rus`=$Rus",$db);
    // $query = sprintf("SELECT * FROM zp
  // WHERE `Rus`=$Rus");

                   $query = "DELETE FROM `save` ";
  mysql_query($query) or die(mysql_error());


    $query = sprintf("SELECT * FROM zp      WHERE `Rus`=$Rus
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


    $query2 = "INSERT INTO save
VALUES('$id','$name','$Rus','$Zg','$viza','$pl','$t','$avia','$ex','$tih','$TR','$Sport')";

    $result2 = MYSQL_QUERY($query2);
          }





?>