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





  <style type="text/css">






    h3 {
    color: black; /* ����� ���� ������ */
      padding-left: 20px;
           margin: 15px
    font-size: 11pt; /* ������ ������� */
      text-decoration: none;
        font-style: italic; /* ��������� ���������� */

   }

     a:hover {
    text-decoration: underline;

  </style>






          <?      echo "�� ����� �� ����, ��� ".$_SESSION['login'];
        $id=  $_SESSION['id'];
    echo 'id='.$id;

 if (empty($_SESSION['login']) )
       {
echo "�� �� ��������������  error!!!";
}
   else


          include ("menu.php");
  ?>         <h3> <a href="red.php"> ����������  </a>  <a href="red2.php"> /  ���������������� </a>   </h3>

 <!--       <?php
         /*

   // ��� ����� ��� ���������, �������� ���� ���� ������
$sdd_db_host='localhost';
// ��� ���� ������ � ������� �� ������ ��������, ��� ��� �� ����� ���� ���������
$sdd_db_name='cl';
// ����� ������ � ���� ������
$sdd_db_user='root';
// ������ ������� � ���� ������
$sdd_db_pass='45091847';



// ������������� ����� � ��������
@mysql_connect($sdd_db_host,$sdd_db_user,$sdd_db_pass);


//mysql_query("SET NAMES 'cp1251'");
mysql_query("SET NAMES 'utf8';");
mysql_query("SET CHARACTER SET 'utf8';");
mysql_query("SET SESSION collation_connection = 'utf8_general_ci';");



// ������������� �� ������ ��� ���� ������
@mysql_select_db($sdd_db_name);
// ������ ������� �� �������

   mysql_query("SET NAMES 'utf8'");


$result=mysql_query('SELECT * FROM `users`');
// ����� ���������� �� ������ ������



while($row=mysql_fetch_array($result))
{ // ������� ������
//$row['prim'] =iconv( 'UTF-8', 'Windows-1251', $row ['prim']);
//$row['adres','finish', 'FIO', 'contacts','prim'] =iconv( 'UTF-8', 'Windows-1251', $row );

	$i++;
   /*echo   '<p>������ id='.$i.'. �����: '.iconv( 'UTF-8', 'Windows-1251', $row['adres']). ' ����� ���������� '
.iconv( 'UTF-8', 'Windows-1251', $row['finish']).
 '. ���  '.iconv( 'UTF-8', 'Windows-1251', $row['FIO']).  '. �������� '.iconv( 'UTF-8', 'Windows-1251', $row['contacts']).
 '. ���������� ' .iconv( 'UTF-8', 'Windows-1251', $row['prim']).   '</p>';



}

     */


 ?>
        -->

        <table > <tr >  <td width=3%></td>
            <td  width=38% valign="top" >

 <img src="av.jpg" alt="Smiley face">

          </td>
                  <td width=2%></td>
   <td  width=32%  valign="top" >
 <div class="he2">
         <p></p>        </div>
   <!--
<h3 > ����� ���� �������</h3>
<p>

     <li>����������  </li>
 <li> ��������,�������� ���������  </li>
 	<li> ���������� �������  </li>



      -->




    <form action="save1.php" method="post">
<!--**** save_user.php - ��� ����� �����������. �� ����, ����� ������� �� ������ "������������������",
������ �� ����� ���������� �� ��������� save_user.php ������� "post" ***** -->

  <p>
    <label>����������<br></label>

  </p>
  <p>
    <label>��������:*<br></label>
    <input name="name" type="textarea" size="1500" maxlength="1500">
  </p>
   <p>
      <label>�����:<br></label>
    <input name="mesto" type="textarea" size="1500" maxlength="1500">
  </p>

       <label>x:<br></label>
    <input name="X" type="textarea" size="1500" maxlength="1500">
  </p>
       <label>y:<br></label>
    <input name="Y" type="textarea" size="1500" maxlength="1500">
  </p>




    <p>
        <label>��� ���������:<br></label>
         <table> <tr>  <td>
        <input type="checkbox" name="type0"  value=" ���� ����� 3� ">   ���� ����� 3�          </td>    <td width=2%> </td>
                <td> <input type="checkbox" name="type1"  value=" ���� ����� 3� ">   ���� ����� 3�    </td>
                                         </tr><tr>
                 <td>  <input type="checkbox" name="type"  value="�/�">   �/�   </td>     <td width=1%> </td>
        <td> <input type="checkbox" name="type2"  value="���� ">  ����     </td>
         </tr>
        <tr>
         <td>  <input type="checkbox" name="type3"  value=" ������ ">   ������   </td>     <td width=1%> </td>
        <td> <input type="checkbox" name="type4"  value=" ������� ">  �������     </td>
                 </tr>
           </table>

  <!--  <input name="mesto" type="textarea" size="1500" maxlength="1500">     -->
  </p>
    <p>
        <label>��� ������:<br></label>
         <table> <tr>  <td>
        <input type="checkbox" name="gruz0"  value=" ����������� �����  ">    ����������� �����       </td>    <td width=1%> </td>
                <td> <input type="checkbox" name="gruz1"  value=" ������������� ����� ">   ������������� �����   </td>
                                         </tr><tr>
                 <td>  <input type="checkbox" name="gruz2"  value=" ��������������� ����� ">   ��������������� �����  </td>     <td width=1%> </td>
        <td> <input type="checkbox" name="gruz3"  value=" ����� ����� ">  ����� �����     </td>

                 </tr>

                 <tr>
                 <td>  <input type="checkbox" name="gruz4"  value=" �������� ����� (������) ">   �������� ����� (������)  </td>     <td width=1%> </td>
        <td> <input type="checkbox" name="gruz5"  value=" ������� ����� ">  ������� �����  </td>

                 </tr>
                     <tr>
                 <td>  <input type="checkbox" name="gruz6"  value=" ������������ ����� ">   ������������ �����  </td>     <td width=1%> </td>
        <td> <input type="checkbox" name="gruz7"  value=" ������� ����� ">  ������� �����  </td>

                 </tr>



           </table>
               <p>
    <label>���� ���������<br></label>
    <input name="cena" type="textarea" size="1500" maxlength="1500">
  </p>
                 <p>
    <label>������ ���������<br></label>
    <input name="goroda" type="textarea" size="1500" maxlength="1500">
  </p>



  <!--  <input name="mesto" type="textarea" size="1500" maxlength="1500">     -->
  </p>
    <p>
    <label>��� e-mail:*<br></label>
    <input name="email" type="textarea" size="1500" maxlength="1500">
  </p>
<!--**** � ��������� ���� (name="login" type="text") ������������ ������ ���� ����� ***** -->
  <p>
    <label>�������: <br></label>
    <input name="telephone" type="textarea" size="1500" maxlength="1500">
  </p>

    <p>



      <p>
    <label>O ��������:<br></label>
    <input name="about" type="textarea" size="1500" maxlength="1500">
  </p>

      <p>  ��. ������
    <label>��. �����:<br></label>
    <input name="uadres" type="textarea" size="1500" maxlength="1500">
  </p>
       <p>
    <label>������������:<br></label>
    <input name="uname" type="textarea" size="1500" maxlength="1500">
  </p>
  <p>
    <label>���:<br></label>
    <input name="inn" type="textarea" size="1500" maxlength="1500">
  </p>
  <p>
    <label>����:<br></label>
    <input name="ogrn" type="textarea" size="1500" maxlength="1500">
  </p>
              <p>
    <label>����:<br></label>
    <input name="okpo" type="textarea" size="1500" maxlength="1500">
  </p><p>
    <label>���:<br></label>
    <input name="kpp" type="textarea" size="1500" maxlength="1500">
  </p><p>
    <label>�������� �����:<br></label>
    <input name="oo" type="textarea" size="1500" maxlength="1500">
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


  </br>  <!--  <p align=center>
         <a href="zai.php"><button class="btn btn-large btn-primary" type="button">�������� ������ ��� ����������������</button>   </a>
<a href="zai2.php"><button class="btn btn-large" type="button">�������� ������ ��� ����������</button>               </a>
                       </p>     -->

<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="js/bootstrap.min.js"></script>





</body>

</html>