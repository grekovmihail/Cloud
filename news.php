      <?php
// ��� ��������� �������� �� ������. ������ � ��� �������� ������ ������������, ���� �� ��������� �� �����. ����� ����� ��������� �� � ����� ������ ���������!!!
session_start();
?>
<html>
 <html lang="en">

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
                include "menu.php";






   ?>


<?php
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

  //  $result = mysql_query("SELECT * FROM prof where WHERE `id`=2",$db);
  //  $row=mysql_fetch_array($result);
    //    echo     $row['id'];

   //   echo     $row['name'];




      $query = sprintf("SELECT * FROM zai ORDER BY vre DESC");
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


 ?>


        <table > <tr >  <td width=3%></td>
            <td  width=38% valign="top" >

          </td>
                  <td width=2%></td>
   <td  width=42%  valign="top" >
 <div class="he2">
         <p></p>        </div>


<?php     while ($row = mysql_fetch_assoc($result)) {   ?>
 <h3 >
    <HR WIDTH="80%" SIZE="3">

  <?php

  $login=$row['login'];
      $d=$row['d'];


 echo "
                <a href='http://cloud-logistics.ru/id$d'> $login  </a>     "   ;
       ?>
       </h3>
<p>
  <h5>
     <p>����������        </p>
 <p> ��� ���������: <?php
     echo     $row['type']   ;

       ?>
      </p>
 <p> �����: <?php
     echo    $row['date'] ;

       ?>  </p>   <p>
 ������: <?php
     echo   $row['out'] ;

       ?> </p>
   <p> ����: <?php
     echo   $row['in']   ;

       ?> </p>


      <p> ���������: <?php
     echo  $row['about'] ;

       ?>

        <p>  <?php
     echo     $row['vre'] ;
                }
       ?>   </p>




       </p>
         </h5>
          </br>

            </td>
             <td width=3% ></td>
  </tr>

  </table>


  </br>
  <!--
<button class="btn btn-large btn-primary" type="button">�������� ������ ��� ����������������</button>
<button class="btn btn-large" type="button">�������� ������ ��� ����������</button>
     -->

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