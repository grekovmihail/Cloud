<?php
// ��� ��������� �������� �� ������. ������ � ��� �������� ������ ������������, ���� �� ��������� �� �����. ����� ����� ��������� �� � ����� ������ ���������!!!
session_start();
?>
<html>
<head>
<title>��������</title>
</head>
<body>
   <?php

   $zeta=$_SESSION['zeta'];
  // $zeta=5;
          echo  $zeta;
     echo "�� ����� �� ����, ��� ".$_SESSION['login'];

// ���������, ����� �� ����������� ������ � id ������������
      echo $login;

                   $_SESSION['zeta'] = $zeta;
    //   $otkogo=12;
     ?>

<form action="saveotv.php" method="post">
<!--**** testreg.php - ��� ����� �����������. �� ����, ����� ������� �� ������ "�����", ������ �� ����� ���������� �� ��������� testreg.php ������� "post" ***** -->

<!--**** � ��������� ���� (name="login" type="text") ������������ ������ ���� ����� ***** -->
  <p align center>
    <label>�����:<br></label>


    <input name="text" type="textarea" size="150" cols="35" rows="5" wrap="virtual"  maxlength="1500">
     <form action="textarea1.php" method="post">

    <p><textarea rows="10" cols="45" name="text"></textarea></p>
    <p><input type="submit" value="���������"></p>
  </form>







  </p>
<!--**** � ���� ��� ������� (name="password" type="password") ������������ ������ ���� ������ ***** -->
<p>
<input type="submit" name="submit" value="���������">
<!--**** �������� (type="submit") ���������� ������ �� ��������� testreg.php ***** -->

</p></form>
<br>






</body>
</html>
