<?php
// ��� ��������� �������� �� ������. ������ � ��� �������� ������ ������������, ���� �� ��������� �� �����. ����� ����� ��������� �� � ����� ������ ���������!!!
session_start();

?>

 <style type="text/css">

        H3 {
    color: black; /* ����� ���� ������ */
     font-size: 13pt; /* ������ ������� */
      text-decoration: none;
        font-style: italic; /* ��������� ���������� */
        margin: 90px;  }



  </style>



<?php


if (isset($_POST['login'])) { $login = $_POST['login']; if ($login == '') { unset($login);} }
//������� ��������� ������������� ����� � ���������� $login, ���� �� ������, �� ���������� ����������
if (isset($_POST['password'])) { $password=$_POST['password']; if ($password =='') { unset($password);} }
//������� ��������� ������������� ������ � ���������� $password, ���� �� ������, �� ���������� ����������

if (empty($login) or empty($password)) //���� ������������ �� ���� ����� ��� ������, �� ������ ������ � ������������� ������
{
exit (" <h3> �� ����� �� ��� ����������, �������� ����� � ��������� ��� ����! </h3>");
}


//$login=$_POST['login'];
$email=$_POST['email'];
//$password=$_POST['password'];
//$id=2;


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



 $i=0;

$result=mysql_query('SELECT * FROM `users`');
// ����� ���������� �� ������ ������



while($row=mysql_fetch_array($result))
{ // ������� ������
//$row['prim'] =iconv( 'UTF-8', 'Windows-1251', $row ['prim']);
//$row['adres','finish', 'FIO', 'contacts','prim'] =iconv( 'UTF-8', 'Windows-1251', $row );

	$i++;


}


// �������� �� ������������� ������������ � ����� �� �������
$result = mysql_query("SELECT id FROM users WHERE login='$login'",$db);
$myrow = mysql_fetch_array($result);
if (!empty($myrow['id'])) {
exit (" <h3> ��������, �������� ���� ����� ��� ���������������. ������� ������ �����.
<a href='reg.php'> ����� </a>  </h3>");
}

    $id=$i;



//mysql_query("SET CHARACTER SET 'utf-8'");
//mysql_query("SET NAMES 'utf-8");

// ���� ������ ���, �� ��������� ������

$query2 = "INSERT INTO users
VALUES('id','$login','$password','$email')";

$result2 = MYSQL_QUERY($query2);


// ���������, ���� �� ������
if ($result2=='TRUE')
{
echo"   <H3>    ����� ���������� �� ��� ����,<a href='http://cloud-logistics.ru/id$id'> $login</a>!  ������� �� �����������! <br>  ������ �� ������ ��������� ���������� � ��� ��� �
 <a href='red.php'> ����������� </a>  ��� <a href='red2.php'>���������������� </a>. <br>       ������ �� ���� �������:
 <a href='http://cloud-logistics.ru/id$id'> http://cloud-logistics.ru/id$id </a>
 </h3>

 "

 ;



          $_SESSION['login']=$login;

            $_SESSION['id']=$id;


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