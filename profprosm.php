       <?php
// ��� ��������� �������� �� ������. ������ � ��� �������� ������ ������������, ���� �� ��������� �� �����. ����� ����� ��������� �� � ����� ������ ���������!!!
session_start();
?>
<html>
  <head>
  <title>�������</title>
   <link href="bootstrap.min.css" rel="stylesheet">
   	   <meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />


            <style type="text/css">

        H3 {
    color: black; /* ����� ���� ������ */
     font-size: 17pt; /* ������ ������� */
      text-decoration: none;
        font-style: italic; /* ��������� ���������� */
       /* padding-left:53px;   */
          }



          H5 {
    color: black; /* ����� ���� ������ */
     font-size: 7pt; /* ������ ������� */

        font-style: italic; /* ��������� ���������� */   }






  </style>
</head>
  <body>
    <? echo "�� ����� �� ����, ��� ".$_SESSION['login'];
        $id=  $_SESSION['id'];
    echo 'id='.$id;
                     $id= $_SERVER[REQUEST_URI];
                             $id=  substr ( $id, 3 )  ;

                                                  $iq= $_SERVER[REQUEST_URI];
                             $iq=  substr ( $iq, 3 )  ;




                                          $zeta=$id;

                                        //   echo 'zeta'. $zeta;
                                           $_SESSION['zeta'] = $zeta;
  //��� ��������
     ?>


<?php

    include "menu.php";

          include ("bd.php");

                              //    $i=  $id;

  //  $result = mysql_query("SELECT * FROM prof where WHERE `id`=36",$db);
  //  $row=mysql_fetch_array($result);
        echo     $row['id'];

      echo     $row['name'];





      $query = sprintf("SELECT * FROM pro   where   id=$iq"
    );
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

 <img src="av.jpg" alt="Smiley face">


          </td>
                  <td width=2%></td>
   <td  width=42%  valign="top" >
 <div class="he2">
         <p></p>        </div>

<h3 >


<?              $query = sprintf("SELECT * FROM users
    WHERE id=$iq  ");
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
             <h3 >

                   <?

           while ($row = mysql_fetch_assoc($result)) {
           $login=  $row['login'];
  echo  $login;




                          }   ?>      </h3>




       <?php
      echo
     $rogin ;
      ?>


       </h3>



<?php

          include ("bd.php");



    $result = mysql_query("SELECT * FROM pro where WHERE `id`=$iq",$db);
  //  $row=mysql_fetch_array($result);
        echo     $row['id'];

      echo     $row['name'];




      $query = sprintf("SELECT * FROM pro
    WHERE id=$iq");
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


 <?php     while ($row = mysql_fetch_assoc($result)) {


       ?>

   <h4>   ���������      </h4>


  <p>
       <?php
      echo
     $row['name'] ;
      ?> </p>
 <p>  <?php
     echo     $row['email'] ;

       ?>  </p>
       <p>  <?php
     echo     $row['mesto']   ;

       ?> </p>

       <p>
 ��� ���������: <?php
     echo    $row['type']  ;
                               echo " ";
       ?> </p>

        <p>
��� ������: <?php
     echo    $row['gruz']  ;
                                                echo " ";

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
  <?php
     echo    $row['telephone']  ;

       ?> </p>



       <p> <?php
     echo    $row['about'] ;






      ?>






    <?
      }
       ?> </p>









  </br>
  <!--      <p align=center>
<button class="btn btn-large btn-primary" type="button">�������� ������ ��� ����������������</button>
<button class="btn btn-large" type="button">�������� ������ ��� ����������</button>
</p>     -->











<?php

          include ("bd.php");



    $result = mysql_query("SELECT * FROM prof2 where WHERE `id`=$iq",$db);
  //  $row=mysql_fetch_array($result);
        echo     $row['id'];

      echo     $row['name'];




      $query = sprintf("SELECT * FROM prof2
    WHERE id=$iq");
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




      <p>



<p>

 <h3 >

<?php     while ($row = mysql_fetch_assoc($result)) {








    ?>
           <h4 >

����������������   </h4>  </h3>

     <?

     echo
     $row['name'] ;

       ?>




       </p>
 <p>  <?php
     echo   $row['email'];

       ?>   </p>     <p>
  <?php
     echo   $row['telephone'];

       ?> </p>
 	<p> <?php
     echo  $row['mesto']  ;

       ?> </p>


       <p>  <?php
     echo    $row['about'] ;
          }
       ?> </p>

         <h3>

   <a href="mail.php" align=center>�������� ������            </a>
               </h3>


                 </td>
             <td width=3% ></td>
  </tr>

  </table>



















 <br>

  <p></p>
     <p></p>
  <p></p>

      <div class="navbar-inner">
          <div class="container">
     <p align=center>
<a href="zai.php"><button class="btn btn-large btn-primary" type="button">�������� ������ ��� ����������������</button>   </a>
<a href="zai2.php"><button class="btn btn-large" type="button">�������� ������ ��� ����������</button>               </a>
</p>

       </div>      </div>









<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="js/bootstrap.min.js"></script>




</body>

</html>