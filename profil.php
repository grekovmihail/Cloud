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



  <? echo "�� ����� �� ����, ��� ".$_SESSION['login'];
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







   ?>


<?php
     include "menu.php";
 /*

   // ��� ����� ��� ���������, �������� ���� ���� ������
$sdd_db_host='localhost';
// ��� ���� ������ � ������� �� ������ ��������, ��� ��� �� ����� ���� ���������
$sdd_db_name='cl';
// ����� ������ � ���� ������
$sdd_db_user='root';
// ������ ������� � ���� ������
$sdd_db_pass='45091847';
      */

  /*
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
                                    */
          include ("bd.php");

                                  $i=  $_SESSION['id'];

 //   $result = mysql_query("SELECT * FROM prof where WHERE `id`=2",$db);
  //  $row=mysql_fetch_array($result);
        echo     $row['id'];

      echo     $row['name'];




      $query = sprintf("SELECT * FROM pro
    WHERE id=$id");
  //  mysql_real_escape_string($firstname),
  //  mysql_real_escape_string($lastname));

// ��������� ������
$result = mysql_query($query);

// ��������� ���������
// ��� ���������� �������� ������, ��������� � MySQL, � ����� ������. ������ ��� �������.
if (!$result) {
    $message  = '�������� ������: ' . mysql_error() . "\n";
    $message .= '������ �������: ' . $query;
    die($message);
}

// ���������� ���������
// ������� ���������� $result �� ������� ����������, ������� � ��� ��������
// ���������� ������������ �����-���� mysql-�������, ���������� � ����������� �������
// ��. ����� mysql_result(), mysql_fetch_array(), mysql_fetch_row() � �.�.





// ����� ���������� �� ������ ������


 /*
while($row=mysql_fetch_array($result))
{ // ������� ������
//$row['prim'] =iconv( 'UTF-8', 'Windows-1251', $row ['prim']);
//$row['adres','finish', 'FIO', 'contacts','prim'] =iconv( 'UTF-8', 'Windows-1251', $row );

	$i++;
  echo   '<p>������ id='.$i.'. �����: '.iconv( 'UTF-8', 'Windows-1251', $row['adres']). ' ����� ���������� '
.iconv( 'UTF-8', 'Windows-1251', $row['finish']).
 '. ���  '.iconv( 'UTF-8', 'Windows-1251', $row['FIO']).  '. �������� '.iconv( 'UTF-8', 'Windows-1251', $row['contacts']).
 '. ���������� ' .iconv( 'UTF-8', 'Windows-1251', $row['prim']).   '</p>';

   */

//}




 ?>


        <table > <tr >  <td width=3%></td>
            <td  width=38% valign="top" >

 <img src="av.jpg" alt="Smiley face">




          </td>
                  <td width=2%></td>
   <td  width=42%  valign="top" >
 <div class="he2">
         <p></p>        </div>

<h3 >
<?php     while ($row = mysql_fetch_assoc($result)) {

     echo
     $row['name'] ;

       ?>
       </h3>
<p>

      <p>  ����������       </p>


 <p>  email: <?php
     echo     $row['email'] ;

       ?>   </p>
        <p>  ����� <?php
     echo     $row['mesto']   ;

       ?> </p>


       <p>
 ��� ���������: <?php
     echo    $row['type']  ;

       ?> </p>

        <p>
��� ������: <?php
     echo    $row['gruz']  ;

       ?> </p>


       <p>
���� ���������: <?php
     echo    $row['cena']  ;

       ?> </p>


       <p>
 ������ ���������: <?php
     echo    $row['goroda']  ;

       ?> </p>


      <p>
 �������: <?php
     echo    $row['telephone']  ;

       ?> </p>


               <p>
X: <?php
     echo    $row['X']  ;

       ?> </p>      <p>
 Y: <?php
     echo    $row['Y']  ;

       ?> </p>











        <p>   <?php
     echo    $row['about'] ;
          }
       ?> </p>




          <p>  ��. ������
     <p> ��. �����:





    <?php
     echo    $row['uadres']  ;

       ?>


   <p> ������������:
  <?   echo    $row['uname']  ;

       ?>
             </p>

      <p>
 ���: <?php
     echo    $row['inn']  ;

       ?>

        </p>

     <p>
 ����: <?php
     echo    $row['ogrn']  ;

       ?> </p>



       <p>
 ����: <?php
     echo    $row['okpo']  ;

       ?> </p>

       <p>
 ���:
     <?php
     echo    $row['kpp']  ;

       ?>
  </p><p>
�������� �����:
      <?php
     echo    $row['oo']  ;

       ?>

  </p>









            </td>
             <td width=3% ></td>
  </tr>

  </table>


  </br>
  <!--      <p align=center>
<button class="btn btn-large btn-primary" type="button">�������� ������ ��� ����������������</button>
<button class="btn btn-large" type="button">�������� ������ ��� ����������</button>
</p>     -->


     <p align=center>
<a href="zai.php"><button class="btn btn-large btn-primary" type="button">�������� ������ ��� ����������������</button>   </a>
<a href="zai2.php"><button class="btn btn-large" type="button">�������� ������ ��� ����������</button>               </a>
</p>












<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="js/bootstrap.min.js"></script>


<?php

}


?>


</body>

</html>