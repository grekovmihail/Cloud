<?php
// ��� ��������� �������� �� ������. ������ � ��� �������� ������ ������������, ���� �� ��������� �� �����. ����� ����� ��������� �� � ����� ������ ���������!!!
session_start();
?>

      <script type="text/javascript">
setTimeout('location.replace("profil2.php")',  0);
</script>
<?php



           $type=" ";
            $name=" ";    $telephone=" ";    $email=" ";    $mesto=" ";    $about=" ";



$name=$_POST['name'];
$email=$_POST['email'];
$telephone=$_POST['telephone'];
$mesto=$_POST['mesto'];
$about=$_POST['about'];

           $id= $_SESSION['id'];

   echo "id=".$id;
//$id=2;
    include ("bd.php");// ���� bd.php ������ ���� � ��� �� �����, ��� � ��� ���������, ���� ��� �� ���, �� ������ �������� ����

        $query = "DELETE FROM `prof2` WHERE `id`=$id";
  mysql_query($query) or die(mysql_error());




//mysql_query("SET CHARACTER SET 'utf-8'");
//mysql_query("SET NAMES 'utf-8");

// ���� ������ ���, �� ��������� ������
$query2 = "INSERT INTO prof2
VALUES('$id','$name','$mesto','$email','$type','$telephone','$about')

";

$result2 = MYSQL_QUERY($query2);


// ���������, ���� �� ������
if ($result2=='TRUE')
{
echo "���������";
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