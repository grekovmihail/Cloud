   <meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
<?php
        include ("bd.php");

            $query = sprintf("SELECT * FROM save
    ");
  //  mysql_real_escape_string($firstname),
  //  mysql_real_escape_string($lastname));

// ��������� ������
$result = mysql_query($query);



  //  $result = mysql_query("SELECT * FROM save",$db);
   //     $query = sprintf("SELECT * FROM zp
   //WHERE Rus=$Rus");
    $result = mysql_query($query);
    if (!$result) {
    $message  = '�������� ������: ' . mysql_error() . "\n";
    $message .= '������ �������: ' . $query;
    die($message);
}
 ?>

<?php     while ($row = mysql_fetch_assoc($result)) {

     echo
     $row['name'] ;


          }





?>