<?php
// ��� ��������� �������� �� ������. ������ � ��� �������� ������ ������������, ���� �� ��������� �� �����. ����� ����� ��������� �� � ����� ������ ���������!!!
session_start();
?>

      <script type="text/javascript">
setTimeout('location.replace("s2.php")', 5000);
</script>
<?php

      //    $zero=$_SESSION['zero'];
   echo "zero=".$zero;

$result=mysql_query('SELECT * FROM `mail`');
// ����� ���������� �� ������ ������

while($row=mysql_fetch_array($result))
{ // ������� ������
//$row['prim'] =iconv( 'UTF-8', 'Windows-1251', $row ['prim']);
//$row['adres','finish', 'FIO', 'contacts','prim'] =iconv( 'UTF-8', 'Windows-1251', $row );
             	$i++;
             }
         echo $i;

           $otkogo=" ";
            $text=" ";    $komu=" ";    $date=" ";

//$_SESSIONotkogo=$_POST['otkogo'];
$text=$_SESSION['text']=$_POST['text'];

 $_SESSION['date']=$_POST['date'];
     $otkogo=$_SESSION['login'];
          $komu=$_SESSION['zero'];
  // $id=$i;


      //   $komu--;

          $zero=$_POST['zero'];
   echo "zero=".$zero;

   echo "id=".$id;
//$id=2;
    include ("bd.php");// ���� bd.php ������ ���� � ��� �� �����, ��� � ��� ���������, ���� ��� �� ���, �� ������ �������� ����

   //        $query = "DELETE FROM `` WHERE `id`=$id";
 // mysql_query($query) or die(mysql_error());




//mysql_query("SET CHARACTER SET 'utf-8'");
//mysql_query("SET NAMES 'utf-8");

// ���� ������ ���, �� ��������� ������



$query2 = "INSERT INTO mail
VALUES('$id','$otkogo','$text','$komu','$date')";

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