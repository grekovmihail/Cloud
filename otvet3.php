      <?php
// ��� ��������� �������� �� ������. ������ � ��� �������� ������ ������������, ���� �� ��������� �� �����. ����� ����� ��������� �� � ����� ������ ���������!!!
session_start();


?>
<html>

<head>
  <title>������������</title>
   <link href="bootstrap.min.css" rel="stylesheet">
   	   <meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
       <meta http-equiv="Refresh" content="300" />
</head>

<body>




       <form action="search.php" method="post">


  <input name="search" input type="text" class="search-query" placeholder="Search">


                    </form>




  <style type="text/css">

        H4 {
    color: black; /* ����� ���� ������ */
     font-size: 11pt; /* ������ ������� */
      text-decoration: none;
        font-style: italic; /* ��������� ���������� */
           margin : 15px;
                 padding: 10px;
 }

          a {
    color: black; /* ����� ���� ������ */



   }

     a:hover {
    text-decoration: underline; /* ��������� �������������
                                   ��� ��������� ������� ���� �� ������ */

  </style>




  <? echo "�� ����� �� ����, ��� ".$_SESSION['login'];
        $id=  $_SESSION['id'];
    echo ' id='.$id;
        include "menu.php";


 if (empty($_SESSION['login']) or empty($_SESSION['id']))
 {


echo "�� �� ��������������  error!!!";
}


//{


//��� ��������

    else
{







   ?>




       <form action="search.php" method="post">
<!--**** save_user.php - ��� ����� �����������. �� ����, ����� ������� �� ������ "������������������",
������ �� ����� ���������� �� ��������� save_user.php ������� "post" ***** -->




      <p>
    <label>O:<br></label>
    <input name="sea" type="text" size="15" maxlength="15">
  </p>
<!--**** � ���� ��� ������� (name="password" type="password") ������������ ������ ���� ������ ***** -->
<p>
<input type="submit" name="submit" value="���������">

<!--**** �������� (type="submit") ���������� ������ �� ��������� save_user.php ***** -->
</p></form>





<?php





























          include ("bd.php");


             ?>         <h4> <a href="vh.php"> ��������  </a>  <a href="otp.php"> /  ������������ </a>   </h4>






        <table > <tr >  <td width=13%></td>

                    <td   valign="top" >
 <div class="he2">
         <p></p>        </div>

<h3 >



       </h3>


     <?

        $idq=  $_SESSION['idq'];

       $query = sprintf("SELECT * FROM users
    WHERE id=$idq   ");
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





    ����:                <?
         while ($row = mysql_fetch_assoc($result)) {
    $zeta=$_SESSION['zeta'];
     $kom=    $row['login'];
                       }
                       //$_SESSION['idq'] = $idq;
                 echo "
                <a href='http://cloud-logistics.ru/id$idq'> $kom  </a>     "
                ?>
<p>

   <HR WIDTH="80%" SIZE="3">

 </p>

          <?php

   $zeta=$_SESSION['zeta'];
  // $zeta=5;


// ���������, ����� �� ����������� ������ � id ������������


                   $_SESSION['zeta'] = $zeta;
    //   $otkogo=12;
     ?>

<form action="saveotv.php" method="post">
<!--**** testreg.php - ��� ����� �����������. �� ����, ����� ������� �� ������ "�����", ������ �� ����� ���������� �� ��������� testreg.php ������� "post" ***** -->

<!--**** � ��������� ���� (name="login" type="text") ������������ ������ ���� ����� ***** -->
  <p align center>
    <label>�����:<br></label>




    <p><textarea rows="10" cols="2500000"  name="text" size="150" style="width: 70%; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box;"></textarea></p>
    <p><input type="submit" value="���������"></p>
  </form>







  </p>
<!--**** � ���� ��� ������� (name="password" type="password") ������������ ������ ���� ������ ***** -->
<p>

<!--**** �������� (type="submit") ���������� ������ �� ��������� testreg.php ***** -->

</p></form>
<br>


            </td>

  </tr>

  </table>


  </br>
  <!--      <p align=center>
<button class="btn btn-large btn-primary" type="button">�������� ������ ��� ����������������</button>
<button class="btn btn-large" type="button">�������� ������ ��� ����������</button>
</p>     -->




                 <br>

  <p></p>
     <p></p>
  <p></p>

  <div class="navbar-fixed-bottom row-fluid">
      <div class="navbar-inner">
          <div class="container">
     <p align=center>
<a href="zai.php"><button class="btn btn-large btn-primary" type="button">�������� ������ ��� ����������������</button>   </a>
<a href="zai2.php"><button class="btn btn-large" type="button">�������� ������ ��� ����������</button>               </a>
</p>

       </div>      </div>    </div>




<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="js/bootstrap.min.js"></script>

<?php


}


?>


</body>

</html>