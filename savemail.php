<?php
// ��� ��������� �������� �� ������. ������ � ��� �������� ������ ������������, ���� �� ��������� �� �����. ����� ����� ��������� �� � ����� ������ ���������!!!
session_start();
?>

      <script type="text/javascript">
setTimeout('location.replace("vh.php")', 0);
</script>
<?php

      //    $zero=$_SESSION['zero'];


$result=mysql_query('SELECT * FROM `mail`');
// ����� ���������� �� ������ ������

while($row=mysql_fetch_array($result))
{ // ������� ������
//$row['prim'] =iconv( 'UTF-8', 'Windows-1251', $row ['prim']);
//$row['adres','finish', 'FIO', 'contacts','prim'] =iconv( 'UTF-8', 'Windows-1251', $row );
             	$i++;
             }


           $otkogo=" ";
            $text=" ";    $komu=" ";    $date=" ";

//$_SESSIONotkogo=$_POST['otkogo'];
$text=$_POST['text'];

 $date=date("F j, Y, g:i a");


     $otkogo=$_SESSION['login'];
          $komu=$_SESSION['zeta'];
           $idq=  $_SESSION['id'];
  // $id=$i;


      //   $komu--;


//$id=2;
    include ("bd.php");// ���� bd.php ������ ���� � ��� �� �����, ��� � ��� ���������, ���� ��� �� ���, �� ������ �������� ����

   //        $query = "DELETE FROM `` WHERE `id`=$id";
 // mysql_query($query) or die(mysql_error());




//mysql_query("SET CHARACTER SET 'utf-8'");
//mysql_query("SET NAMES 'utf-8");

// ���� ������ ���, �� ��������� ������
       $kom="fail";
     $read="no";
     $kom=$_SESSION['kom'];


$query2 = "INSERT INTO mail
VALUES('$id','$idq','$otkogo','$text','$komu','$date','$kom','$read')";

$result2 = MYSQL_QUERY($query2);


// ���������, ���� �� ������
if ($result2=='TRUE')
{
echo "�����������";
}

else {
echo "������! �� �� ����������������.";
     }




 /*

// ���� ������ ���, �� ��������� ������
$result2 = mysql_query ("INSERT INTO users (login,password,email) VALUES('$login',','$password','$email'')");
// ���������, ���� �� ������
if ($result2=='TRUE')
{
echo "�� ������� ����������������! ������ �� ������ ����� �� ����. <a href='index.php'>������� ��������</a>";
}

else {
echo "������! �� �� ����������������.";
     }     */
?>