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



  <?


 if (empty($_SESSION['login']) or empty($_SESSION['id']))
 {




?>
<h3>Пожалуйста, авторизуйтесь</h3>

 <script type="text/javascript">
setTimeout('location.replace("index.php")', 160);
</script>

 <?

}


//{


//код страницы

    else
{

echo "Вы вошли на сайт, как ".$_SESSION['login'];
        $id=  $_SESSION['id'];
    echo ' id='.$id;
        include "menu.php";








 //  echo $A;
 //   echo $B;
    ?>



  <!--   //========================================================================================================
 //название

  -->


  <?php
           include ("bd.php");



//{


//код страницы


    $mesto=$_POST['ia'];








//---------------     транслетация
                            $st=$mesto;





  // функция превода текста с кириллицы в траскрипт
function transliterate($st) {
  $st = strtr($st,
    "абвгдежзийклмнопрстуфыэАБВГДЕЖЗИЙКЛМНОПРСТУФЫЭ",
    "abvgdegziyklmnoprstufieABVGDEGZIYKLMNOPRSTUFIE"
  );
  $st = strtr($st, array(
    'ё'=>"yo",    'х'=>"h",  'ц'=>"ts",  'ч'=>"ch", 'ш'=>"sh",
    'щ'=>"shch",  'ъ'=>'',   'ь'=>'',    'ю'=>"yu", 'я'=>"ya",
    'Ё'=>"Yo",    'Х'=>"H",  'Ц'=>"Ts",  'Ч'=>"Ch", 'Ш'=>"Sh",
    'Щ'=>"Shch",  'Ъ'=>'',   'Ь'=>'',    'Ю'=>"Yu", 'Я'=>"Ya",
  ));
  return $st;
}


          $mesto=transliterate($st);


   ?>   <p align=center>
<?
echo $mesto; echo   ': ';
    $mesto = preg_replace('~[^A-Z-a-z0-9_]+~u', '%20', $mesto);








//-----------



//-----------------геокодирование



function do_get() {

}


function api_req($url,$http_method,$headers,$post_data="")
{                                                                                                                                                          $headers[]="Accept: application/json";
    $ch = curl_init();                                                                                                                                     curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $http_method);
    curl_setopt($ch, CURLOPT_URL, $url);                                                                                                                   curl_setopt($ch, CURLOPT_HEADER, 1);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);                                                                                                        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);                                                                                                           if ($post_data)
    {
        curl_setopt($ch, CURLOPT_POSTFIELDS,$post_data);
    }
    $res=curl_exec($ch);
    curl_close($ch);                                                                                                                                       if (strpos($res,"X-Auth-Token:")!==false)
    {
        preg_match("|X-Auth-Token: ([a-z0-9_]+)|i",$res,$match_token);                                                                                         preg_match("|X-Server-Management-Url: ([a-z0-9_/:\\.]+)|i",$res,$match_url);                                                                           return array("token"=>$match_token[1],"url"=>$match_url[1]);                                                                                        }                                                                                                                                                      $res=substr($res,strpos($res,"\r\n\r\n")+4);
     #return json_decode($res);
     return $res;
}

$headers=array(
"Accept-language: en",
);
             https://api.opencagedata.com/geocode/v1/json?q=Moscow&key=02e279e3a40b06080cc5e76ae3579bd7

                     $adres =$mesto;

$res = api_req("http://api.opencagedata.com/geocode/v1/json?q=$adres&key=02e279e3a40b06080cc5e76ae3579bd7","GET",$headers);
                     print $obj->{'status'}->{'message'}; // 12345
          print $obj->{'total_results'};

     $obj = json_decode($res);
print $obj->{'results'}[0]->{'geometry'}->{'lng'}; // 12345
echo ' ';

    print $obj->{'results'}[0]->{'geometry'}->{'lat'}; // 12345

    $X=   $obj->{'results'}[0]->{'geometry'}->{'lat'};
    $Y=  $obj->{'results'}[0]->{'geometry'}->{'lng'};

//     print $obj->{'rate'}->{'limit'};






     if (empty($X) or empty($Y))
 {
    $A=$_SESSION['A'];
        $B=$_SESSION['B'];    }
          else {

    $A=$X;
        $B=$Y;

           }






//----------------------------------------------

                   $R=$_POST['R'];

                 if (empty($R))
 {
 $R=0.0048;      }
          else {

  $R=$R*0.00099;

           }




                                  $i=  $_SESSION['id'];

 //   $result = mysql_query("SELECT * FROM prof where WHERE `id`=2",$db);
  //  $row=mysql_fetch_array($result);




             $query = "SELECT * FROM `pro`  ";





             $res = mysql_query($query);
while($row = mysql_fetch_array($res))
{
   $X= $row['X'];

   $Y= $row['Y'];

   $id= $row['id'];




  // echo $X;
 //  echo $B;
 //  echo $Y;


 // $login= $row['login'] ;

  ?>

    <p align=center>

  <?









  if  (( pow(($X-$A),2)+pow(($Y-$B),2) )<$R )

  {
    $name =$row['name'];
      $mesto =$row['mesto'];
echo " <a href='http://cloud-logistics.ru/id$id'> $name  </a>     " ;

                echo $mesto;      }

}



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