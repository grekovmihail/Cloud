<?php
// ��� ��������� �������� �� ������. ������ � ��� �������� ������ ������������, ���� �� ��������� �� �����. ����� ����� ��������� �� � ����� ������ ���������!!!
session_start();
?>

      <script type="text/javascript">
setTimeout('location.replace("news2.php")', 0);
</script>
<?php

      $type=" ";
            $date=" ";    $out=" ";    $in=" ";      $about=" ";

$date=$_POST['date'];
$type=$_POST['type'];

$in=$_POST['in'];
 $mesto=$_POST['mesto'];
$about=$_POST['about'];

        $login=  $_SESSION['login'];

           $d= $_SESSION['id'];
             $vre=date("F j, Y, g:i a");

   echo "id=".$id;
//$id=2;
    include ("bd.php");// ���� bd.php ������ ���� � ��� �� �����, ��� � ��� ���������, ���� ��� �� ���, �� ������ �������� ����

//mysql_query("SET CHARACTER SET 'utf-8'");
//mysql_query("SET NAMES 'utf-8");
          // ���� ������ ���, �� ��������� ������
$query2 = "INSERT INTO zai2
VALUES('$d', '$login','$date','$mesto','$type','$about', '$vre')";

$result2 = MYSQL_QUERY($query2);


// ���������, ���� �� ������
if ($result2=='TRUE')
{
echo "������ ���������";
}

else {
echo "������! ";
     }

?>