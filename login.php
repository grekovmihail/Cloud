<?php
// ��� ��������� �������� �� ������. ������ � ��� �������� ������ ������������, ���� �� ��������� �� �����. ����� ����� ��������� �� � ����� ������ ���������!!!
session_start();
?>
<html>
<head>
<title>������� ��������</title>
</head>
<body>
<h2>������� ��������</h2>
<form action="testreg.php" method="post">
<!--**** testreg.php - ��� ����� �����������. �� ����, ����� ������� �� ������ "�����", ������ �� ����� ���������� �� ��������� testreg.php ������� "post" ***** -->
  
<?php
// ���������, ����� �� ����������� ������ � id ������������
if (empty($_SESSION['login']) or empty($_SESSION['id']))
{
?>
<p>
    <label>��� �����:<br></label>
    <input name="login" type="text" size="15" maxlength="15">
  </p>
<!--**** � ��������� ���� (name="login" type="text") ������������ ������ ���� ����� ***** -->  
  <p>
    <label>��� ������:<br></label>
    <input name="password" type="password" size="15" maxlength="15">
  </p>
<!--**** � ���� ��� ������� (name="password" type="password") ������������ ������ ���� ������ ***** -->  
<p>
<input type="submit" name="submit" value="�����">
<!--**** �������� (type="submit") ���������� ������ �� ��������� testreg.php ***** --> 
<br>
<!--**** ������ �� �����������, ���� ���-�� �� ������ ����� ���� �������� ***** --> 
<a href="reg.php">������������������</a> 
</p></form>
<br>
<?php
}
else
   {
   // ���� �� �����, �� �� ������� ������
    echo "�� ����� �� ����, ��� ".$_SESSION['login'];
 
   }
?>
</body>
</html>

