      <?php
// ��� ��������� �������� �� ������. ������ � ��� �������� ������ ������������, ���� �� ��������� �� �����. ����� ����� ��������� �� � ����� ������ ���������!!!
session_start();
  $id=  $_SESSION['id'];
 $search='������ �� �������';
?>

<!DOCTYPE HTML>

<html>

<head>
  <title>Menu</title>
    <link href="bootstrap.min.css" rel="stylesheet">
   	   <meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
</head>

<body>
    <form action="search.php" method="post">


  <div class="navbar">
        <div class="navbar-inner">
        <a class="brand" href="index.php">Cloud logistics</a>

        <ul class="nav nav-tabs">
        <ul class="nav">
        <li><a href="vh.php">��������








        <?php
                    $g= 0;
          include ("bd.php");
                                  $i=  $_SESSION['id'];


 //   $result = mysql_query("SELECT * FROM prof where WHERE `id`=2",$db);
  //  $row=mysql_fetch_array($result);
        echo     $row['id'];

      echo     $row['name'];


                $komu=$_SESSION['id'];

 $query = sprintf("SELECT * FROM mail
    WHERE komu=$komu  ORDER BY date DESC  ");



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
         $read= $row['read'];

   if ($read=="no")
 {
    $g=$g+1;
     }  }
      if ($g==0) $g='';
      else echo '+';

     echo $g;
     if ($g==0)



       ?>













        </a></li>
                <li>
                <?

                 echo "
                <a href='http://cloud-logistics.ru/id$id'> ��� �������</a>     "
                ?></li>
                 <li><a href="red.php">������������� �������</a></li>
      <li><a href="news.php">����� ���������</a></li>
        <li><a href="news2.php">����� �����������</a></li>

                <li><a href="rp2.php">����������� �����</a></li>
 
 </form>






        <li ><a href="logout.php" align=right>�����</a></li>
        </ul>
        </div>
        </div>


<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="js/bootstrap.min.js"></script>




</body>

</html>