      <?php
// ��� ��������� �������� �� ������. ������ � ��� �������� ������ ������������, ���� �� ��������� �� �����. ����� ����� ��������� �� � ����� ������ ���������!!!
session_start();

?>
<html>

<head>
  <title>�����</title>
   <link href="bootstrap.min.css" rel="stylesheet">
   	   <meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
       <meta http-equiv="Refresh" content="300" />
</head>

<body>

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

        <style type="text/css">

        H4 {
    color: black; /* ����� ���� ������ */
     font-size: 17pt; /* ������ ������� */
      text-decoration: none;
        font-style: italic; /* ��������� ���������� */
                 padding-left: 41px;
                                  padding-right: 41px;

 }






   </style>

  <h4 align=center>  <a href="rp2.php">����������� �����</a>           </h4>

<?php



           include ("bd.php");

                                  $i=  $_SESSION['id'];

 //   $result = mysql_query("SELECT * FROM prof where WHERE `id`=2",$db);
  //  $row=mysql_fetch_array($result);
                 $search="������ �� �������";
        echo     $row['search'];
        $search=$_POST['sea'];



             //   $login=$_row['search'];




             $query = "SELECT * FROM `users` where login like '%$search%' ";


             $res = mysql_query($query);
while($row = mysql_fetch_array($res))
{




 $id= $row['id'];
  $login= $row['login'] ;


  ?>
  <br><br>
    <p align=center>

  <?
echo "
                <a href='http://cloud-logistics.ru/id$id'> $login  </a>     " ;


}









 ?>


        <table > <tr >  <td width=3%></td>

                  <td width=50%></td>
   <td   valign="top" >
 <div class="he2">
         <p></p>        </div>

<h3 >

       </h3>
<p>

   <HR WIDTH="80%" SIZE="3">


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