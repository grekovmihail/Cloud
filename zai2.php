<?php
// ��� ��������� �������� �� ������. ������ � ��� �������� ������ ������������, ���� �� ��������� �� �����. ����� ����� ��������� �� � ����� ������ ���������!!!
session_start();
?>
<html>

<head>
  <title>�������</title>
   <link href="bootstrap.min.css" rel="stylesheet">
         <meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
</head>

<body>



          <?      echo "�� ����� �� ����, ��� ".$_SESSION['login'];
        $id=  $_SESSION['id'];
    echo 'id='.$id;

 if (empty($_SESSION['login']) or empty($_SESSION['id']))
 {


echo "�� �� ��������������  error!!!";
}


//{


//��� ��������

    else
{
            include "menu.php";

   ?>




        <table > <tr >  <td width=3%></td>
            <td  width=38% valign="top" >

          </td>
                  <td width=2%></td>
   <td  width=42%  valign="top" >
 <div class="he2">
         <p></p>        </div>





    <form action="save_zai2.php" method="post">
<!--**** save_user.php - ��� ����� �����������. �� ����, ����� ������� �� ������ "������������������",
������ �� ����� ���������� �� ��������� save_user.php ������� "post" ***** -->
  <p>
    <label>�����:*<br></label>
    <input name="date" type="text" size="150" maxlength="1500">
  </p>

    <p>
    <label>�����:*<br></label>
    <input name="mesto" type="text" size="15" maxlength="15">
  </p>
<!--**** � ��������� ���� (name="login" type="text") ������������ ������ ���� ����� ***** -->
  <p>

    <p>
    <label>���� ������: <br></label>
    <input name="type" type="text" size="15" maxlength="15">
  </p>






      <p>
    <label>O:<br></label>
    <input name="about" type="text" size="15" maxlength="15">
  </p>
<!--**** � ���� ��� ������� (name="password" type="password") ������������ ������ ���� ������ ***** -->
<p>
<input type="submit" name="submit" value="���������">

<!--**** �������� (type="submit") ���������� ������ �� ��������� save_user.php ***** -->
</p></form>















            </td>
             <td width=3% ></td>
  </tr>

  </table>


  </br>
        <p align=center>
<button class="btn btn-large btn-primary" type="button">�������� ������ ��� ����������������</button>
<button class="btn btn-large" type="button">�������� ������ ��� ����������</button>
</p>















<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="js/bootstrap.min.js"></script>


       <?php

}


?>


</body>

</html>