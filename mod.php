<?php
// ��� ��������� �������� �� ������. ������ � ��� �������� ������ ������������, ���� �� ��������� �� �����. ����� ����� ��������� �� � ����� ������ ���������!!!
session_start();
?>
<html>
<head>
<title>����</title>
 <link href="bootstrap.min.css" rel="stylesheet">
   	   <meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />


</head>
<body>
     <style type="text/css">

        H3 {
    color: black; /* ����� ���� ������ */
     font-size: 17pt; /* ������ ������� */
      text-decoration: none;
        font-style: italic; /* ��������� ���������� */   }

          H5 {
    color: black; /* ����� ���� ������ */
     font-size: 7pt; /* ������ ������� */

        font-style: italic; /* ��������� ���������� */   }


          a {
    color: black; /* ����� ���� ������ */
      padding: 5px;

    font-size: 17pt; /* ������ ������� */
      text-decoration: none;
        font-style: italic; /* ��������� ���������� */

   }

     a:hover {
    text-decoration: underline; /* ��������� �������������
                                   ��� ��������� ������� ���� �� ������ */

                             label      {
    width: 3000%; /* ������ � ��������� */
    height: 300px; /* ������ � �������� */
   }

  </style>
  <br><br>

<h3 align=center>���� �� ����   <a href="reg.php"> /  ����������� </a>   </h3>
<form action="testreg.php" method="post">
<!--**** testreg.php - ��� ����� �����������. �� ����, ����� ������� �� ������ "�����", ������ �� ����� ���������� �� ��������� testreg.php ������� "post" ***** -->

<?php
// ���������, ����� �� ����������� ������ � id ������������
if (empty($_SESSION['log']) or empty($_SESSION['id']))
{
?>
<p align=center>
    <label>��� �����:<br></label>
    <input name="log" type="text" size="15" maxlength="15">
  </p>
<!--**** � ��������� ���� (name="login" type="text") ������������ ������ ���� ����� ***** -->
  <p align=center>
    <label>��� ������:<br></label>
    <input name="password" type="password" size="15" maxlength="15">
  </p>
<!--**** � ���� ��� ������� (name="password" type="password") ������������ ������ ���� ������ ***** -->

<!--**** ������ �� �����������, ���� ���-�� �� ������ ����� ���� �������� ***** -->

<H5  align=center>
<input type="submit" class="btn btn-large btn-primary" name="submit" value="����">     </H5>

<!--**** �������� (type="submit") ���������� ������ �� ��������� save_user.php ***** -->


</p></form>
<br>
<?php
}
else
   {
   // ���� �� �����, �� �� ������� ������
 //   echo "�� ����� �� ����, ��� ".$_SESSION['login'];


 //    echo "�� ������� ����� �� ����!  ";
      ?>
                <script type="text/javascript">
setTimeout('location.replace("moder.php")', 0);
</script>
  <?php
   }
?>

<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>
</html>

