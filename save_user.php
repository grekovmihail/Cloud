<?php


if (isset($_POST['login'])) { $login = $_POST['login']; if ($login == '') { unset($login);} }
//������� ��������� ������������� ����� � ���������� $login, ���� �� ������, �� ���������� ����������
if (isset($_POST['password'])) { $password=$_POST['password']; if ($password =='') { unset($password);} }
//������� ��������� ������������� ������ � ���������� $password, ���� �� ������, �� ���������� ����������

if (empty($login) or empty($password)) //���� ������������ �� ���� ����� ��� ������, �� ������ ������ � ������������� ������
{
exit ("�� ����� �� ��� ����������, �������� ����� � ��������� ��� ����!");
}


//$login=$_POST['login'];
$email=$_POST['email'];
//$password=$_POST['password'];
//$id=2;
    include ("bd.php");// ���� bd.php ������ ���� � ��� �� �����, ��� � ��� ���������, ���� ��� �� ���, �� ������ �������� ����


//���� ����� � ������ �������,�� ������������ ��, ����� ���� � ������� �� ��������, ���� �� ��� ���� ����� ������
$login = stripslashes($login);
$login = htmlspecialchars($login);

$password = stripslashes($password);
$password = htmlspecialchars($password);

//������� ������ �������
$login = trim($login);
$password = trim($password);


// ������������ � ����
include ("bd.php");// ���� bd.php ������ ���� � ��� �� �����, ��� � ��� ���������, ���� ��� �� ���, �� ������ �������� ����





$result=mysql_query('SELECT * FROM `users`');
// ����� ���������� �� ������ ������



while($row=mysql_fetch_array($result))
{ // ������� ������
//$row['prim'] =iconv( 'UTF-8', 'Windows-1251', $row ['prim']);
//$row['adres','finish', 'FIO', 'contacts','prim'] =iconv( 'UTF-8', 'Windows-1251', $row );

	$i++;


}


     echo $i;



// �������� �� ������������� ������������ � ����� �� �������
$result = mysql_query("SELECT id FROM users WHERE login='$login'",$db);
$myrow = mysql_fetch_array($result);
if (!empty($myrow['id'])) {
exit ("��������, �������� ���� ����� ��� ���������������. ������� ������ �����.");
}

    $id=$i+1;
     echo $id;


//mysql_query("SET CHARACTER SET 'utf-8'");
//mysql_query("SET NAMES 'utf-8");

// ���� ������ ���, �� ��������� ������
$query2 = "INSERT INTO users
VALUES('$login','$password','$email')";

$result2 = MYSQL_QUERY($query2);


// ���������, ���� �� ������
if ($result2=='TRUE')
{
echo "�� ������� ����������������! ��������� ��� �������, ����������. <a href='red.php'> ���������� </a> <a href='red2.php'>���������������� </a>";





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