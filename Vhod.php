      <?php
// ��� ��������� �������� �� ������. ������ � ��� �������� ������ ������������, ���� �� ��������� �� �����. ����� ����� ��������� �� � ����� ������ ���������!!!
session_start();
?>
<html>

<head>
  <title>��������</title>
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
         <div class="navbar">
        <div class="navbar-inner">
        <a class="brand" href="#">�����</a>

        <ul class="nav nav-tabs">
        <ul class="nav">
        <li class="active"><a href="#">�������</a></li>
      <li><a href="news.php">����� ���������</a></li>
        <li><a href="news2.php">����� �����������</a></li>
        <li ><a href="logout.php" align=right>�����</a></li>
        </ul>
        </div>
        </div>

<?php




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
     $row['otkogo'] ;

       ?>
       </h3>
<p>

     <li> ������       </li>


 <li> �����: <?php
     echo     $row['text'] ;

       ?>   </li>
       	<li> ���� <?php
     echo     $row['date']   ;

       ?> </li>

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