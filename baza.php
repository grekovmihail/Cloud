
<html>
 <html lang="en">

<head>
  <title>Профиль</title>
   <link href="bootstrap.min.css" rel="stylesheet">
   	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

</head>

<body>


         <div class="navbar">
        <div class="navbar-inner">
        <a class="brand" href="#">Лэйбл</a>

        <ul class="nav nav-tabs">
        <ul class="nav">
        <li class="active"><a href="#">Профиль</a></li>
        <li><a href="#">Новые перевозки</a></li>
        <li><a href="#">Новые перевозчики</a></li>
        <li ><a href="#" align=right>Выход</a></li>
        </ul>
        </div>
        </div>

<?php



          include ("bd.php");
   /* $result = mysql_query("SELECT id FROM users WHERE login='$login'",$db);
$myrow = mysql_fetch_array($result);
$i=$myrow['id']     */


    $result = mysql_query("SELECT * FROM prof ",$db);
// берем результаты из каждой строки



while($row=mysql_fetch_array($result))
{ // выводим данные
//$row['prim'] =iconv( 'UTF-8', 'Windows-1251', $row ['prim']);
//$row['adres','finish', 'FIO', 'contacts','prim'] =iconv( 'UTF-8', 'Windows-1251', $row );

	$i++;
  echo   '<p>Запись id='.$i.'. id: '.iconv( 'UTF-8', 'Windows-1251', $row['id']). ' login '
 .$row['login'].
 '. email  '.iconv( 'UTF-8', 'Windows-1251', $row['email']).  '. Контакты '.iconv( 'UTF-8', 'Windows-1251', $row['contacts']).
 '. Примечания ' . $row['name']  ;



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

<h3 > Гомер Джэй Симпсон
<?php
     echo    iconv( 'UTF-8', 'Windows-1251',
     $row['name']) ;

       ?>
       </h3>
<p>

     <li>Перевозчик  <?php
     echo    iconv( 'UTF-8', 'Windows-1251', $row['type'])

       ?>
       </li>
 <li> email <?php
     echo    iconv( 'UTF-8', 'Windows-1251', $row['email'])

       ?>   </li>    <li>
 Телефон: <?php
     echo    iconv( 'UTF-8', 'Windows-1251', $row['telephone'])

       ?> </li>
 	<li> Московская область <?php
     echo    iconv( 'UTF-8', 'Windows-1251', $row['mesto'])

       ?> </li>


     	<li> Подробнее <?php
     echo    iconv( 'UTF-8', 'Windows-1251', $row['about'])

       ?> </li>



            </td>
             <td width=3% ></td>
  </tr>

  </table>


  </br>
        <p align=center>
<button class="btn btn-large btn-primary" type="button">Оставить заявку как грузоотправитель</button>
<button class="btn btn-large" type="button">Оставить заявку как перевозчик</button>
</p>















<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="js/bootstrap.min.js"></script>




</body>

</html>