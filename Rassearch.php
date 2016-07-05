      <?php
// вся процедура работает на сесиях. Именно в ней хранятся данные пользователя, пока он находится на сайте. Очень важно запустить их в самом начале странички!!!
session_start();

?>
<html>

<head>
  <title>Поиск</title>
   <link href="bootstrap.min.css" rel="stylesheet">
   	   <meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
       <meta http-equiv="Refresh" content="300" />
</head>

<body>

           <style type="text/css">

        H4 {
    color: black; /* Синий цвет текста */
     font-size: 11pt; /* Размер надписи */
      text-decoration: none;
        font-style: italic; /* Курсивное начертание */
           margin : 15px;
                 padding: 10px;
 }

          a {
    color: black; /* Синий цвет текста */



   }

     a:hover {
    text-decoration: underline; /* Добавляем подчеркивание
                                   при наведении курсора мыши на ссылку */

  </style>



  <? echo "Вы вошли на сайт, как ".$_SESSION['login'];
        $id=  $_SESSION['id'];
    echo ' id='.$id;
        include "menu.php";


 if (empty($_SESSION['login']) or empty($_SESSION['id']))
 {


echo "Вы не авторизированы  error!!!";
}


//{


//код страницы

    else
{
    $name=$_POST['name'];
        $type=$_POST['type'];
        $mesto=$_POST['mesto'];
    ?>




  <!--   //========================================================================================================
 //название

  -->


  <?php


                 if (empty($name) &&empty($type) && empty($mesto) && empty($gruz) )
                 {



             $query = "SELECT * FROM `prof` where name like '%$name%'  ";


             $res = mysql_query($query);
while($row = mysql_fetch_array($res))
{
   $id= $row['id'];
 // $login= $row['login'] ;

  ?>
  <br><br>
    <p align=center>

  <?
echo "
                <a href='http://cloud-logistics.ru/id$id'> $name  </a>     " ;

}

}

 ?>
        <?

                 }


           include ("bd.php");
   if (empty($name) )
 {


}


//{


//код страницы

    else
{



                                  $i=  $_SESSION['id'];

 //   $result = mysql_query("SELECT * FROM prof where WHERE `id`=2",$db);
  //  $row=mysql_fetch_array($result);




             $query = "SELECT * FROM `prof` where name like '%$name%' ";


             $res = mysql_query($query);
while($row = mysql_fetch_array($res))
{
   $id= $row['id'];
 // $login= $row['login'] ;

  ?>
  <br><br>
    <p align=center>

  <?
echo "
                <a href='http://cloud-logistics.ru/id$id'> $name  </a>     " ;

}

}

 ?>


<!-- // ========================================================================================================  -->


    <!--   //========================================================================================================
 //Тип перевозок

  -->

<?php
           include ("bd.php");

            if (empty($type) )
 {


}


//{


//код страницы

    else
{

                                  $i=  $_SESSION['id'];

 //   $result = mysql_query("SELECT * FROM prof where WHERE `id`=2",$db);
  //  $row=mysql_fetch_array($result);
                 $search="Ничего не найдено";
        echo     $row['search'];
        $search=$_POST['sea'];



             //   $login=$_row['search'];



             $query = "SELECT * FROM `prof` where type like '%$type%' ";


             $res = mysql_query($query);
while($row = mysql_fetch_array($res))
{




 $id= $row['id'];
  $name= $row['name'] ;


  ?>
  <br><br>
    <p align=center>

  <?
echo "
                <a href='http://cloud-logistics.ru/id$id'> $name  </a>     " ;
                                echo $type     ;


}  }

 ?>


<!-- // ========================================================================================================  -->



  <!--   //========================================================================================================
 //Адрес

  -->

<?php
           include ("bd.php");
             if (empty($mesto) )
 {


}


//{


//код страницы

    else
{

                                  $i=  $_SESSION['id'];




             $query = "SELECT * FROM `prof` where mesto like '%$mesto%' ";


             $res = mysql_query($query);
while($row = mysql_fetch_array($res))
{




    $name=$row['name'];


  ?>
  <br><br>
    <p align=center>

  <?
echo "
                <a href='http://cloud-logistics.ru/id$id'> $name  </a>     " ;

                    echo $mesto     ;
}   }

 ?>


<!-- // ========================================================================================================  -->





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
<button class="btn btn-large btn-primary" type="button">Оставить заявку как грузоотправитель</button>
<button class="btn btn-large" type="button">Оставить заявку как перевозчик</button>
</p>     -->




                 <br>

  <p></p>
     <p></p>
  <p></p>

  <div class="navbar-fixed-bottom row-fluid">
      <div class="navbar-inner">
          <div class="container">
     <p align=center>
<a href="zai.php"><button class="btn btn-large btn-primary" type="button">Оставить заявку как грузоотправитель</button>   </a>
<a href="zai2.php"><button class="btn btn-large" type="button">Оставить заявку как перевозчик</button>               </a>
</p>

       </div>      </div>    </div>




<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="js/bootstrap.min.js"></script>

<?php


}


?>


</body>

</html>