      <?php
// вся процедура работает на сесиях. Именно в ней хранятся данные пользователя, пока он находится на сайте. Очень важно запустить их в самом начале странички!!!
session_start();
?>
<html>

<head>
  <title>Входящие</title>
   <link href="bootstrap.min.css" rel="stylesheet">
   	   <meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
</head>

<body>
   <? echo "Вы вошли на сайт, как ".$_SESSION['login'];
        $id=  $_SESSION['id'];
    echo 'id='.$id;

 if (empty($_SESSION['login']) or empty($_SESSION['id']))
 {
 echo "Вы не авторизированы  error!!!";
}

//{

//код страницы
     else
{

    ?>
         <div class="navbar">
        <div class="navbar-inner">
        <a class="brand" href="#">Лэйбл</a>

        <ul class="nav nav-tabs">
        <ul class="nav">
        <li class="active"><a href="#">Профиль</a></li>
      <li><a href="news.php">Новые перевозки</a></li>
        <li><a href="news2.php">Новые перевозчики</a></li>
        <li ><a href="logout.php" align=right>Выход</a></li>
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

     <li> Письмо       </li>


 <li> текст: <?php
     echo     $row['text'] ;

       ?>   </li>
       	<li> Дата <?php
     echo     $row['date']   ;

       ?> </li>

            </td>
             <td width=3% ></td>
  </tr>

  </table>


  </br>
  <!--      <p align=center>
<button class="btn btn-large btn-primary" type="button">Оставить заявку как грузоотправитель</button>
<button class="btn btn-large" type="button">Оставить заявку как перевозчик</button>
</p>     -->


     <p align=center>
<a href="zai.php"><button class="btn btn-large btn-primary" type="button">Оставить заявку как грузоотправитель</button>   </a>
<a href="zai2.php"><button class="btn btn-large" type="button">Оставить заявку как перевозчик</button>               </a>
</p>
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="js/bootstrap.min.js"></script>

<?php

}

?>


</body>

</html>