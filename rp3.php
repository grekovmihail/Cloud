<?php
// вся процедура работает на сесиях. Именно в ней хранятся данные пользователя, пока он находится на сайте. Очень важно запустить их в самом начале странички!!!
session_start();


?>
<html>

<head>
  <title>Расширенный поиск</title>
   <link href="bootstrap.min.css" rel="stylesheet">
         <meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />


           <style type="text/css">

        H4 {
    color: black; /* Синий цвет текста */
     font-size: 17pt; /* Размер надписи */
      text-decoration: none;
        font-style: italic; /* Курсивное начертание */
                 padding-left: 41px;
                                  padding-right: 41px;

 }






   </style>
    <script type="text/javascript">
var height=10;
var width=10;


 // setTimeout('location.replace("geo.php")', 0);

//  window.location.href = "http://cloud-logistics.ru/rp2.php?geo3";

</script>

<?php




  $A= $_SERVER[REQUEST_URI];


//$X=parse_url($X, PHP_URL_query );
  $A= substr ( $A, 9 )  ;



   $arr = explode("+", $A);
          $_SESSION['A']= $arr[0];

     $_SESSION['B']= $arr[1];


 // echo 'x='. $_SESSION['A'];
  // echo 'Y='. $_SESSION['B'];
?>




    <script type="text/javascript">













   /* Определение текущих координат с помощью технологии
 * Geolocation (GNSS, WiFi, CellID, IP) и Yandex.API
 */
  function getPosition() {
    if(navigator.geolocation) {
      navigator.geolocation.getCurrentPosition(
        // Пытаемся определить текущие координаты
        googleAPI,
        // Иначе, определяем координаты центра города по IP-адресу с помощью Яндекс.API
        yandexAPI,
        // Параметры
        {
          enableHighAccuracy: true,      // Режим высокой точности
          timeout: 27000,                // Максиальное время ожидания ответа (в миллисекундах)
          maximumAge: 0                  // Максимальное время жизни полученных данных
        }
      );
    }
    else {
      yandexAPI();
    }
    // Устанавливаем таймер вызова этого же метода через 30 секунд
    setTimeout("getPosition()", 30000);
  }


/* Определяем координаты с помощью Google.API
 */
  function googleAPI(position) {
    alert(position.coords.latitude+", "+position.coords.longitude);
  }


/* Определяем координаты с помощью Yandex.API
 */
  function yandexAPI(error) {
    alert(ymaps.geolocation.latitude+", "+ymaps.geolocation.longitude);
  }

          </script>

  <style type="text/css">


body {
    font-family: 'Vollkorn', serif;
    font-size:16px;
    margin: 0 auto;
    }

    h2 {
    font-size: 28px;
    font-style:italic;
    text-align:center;
    }

    a{
        text-decoration:none;
    }
    p{
        text-align:center;
    }

#wrap{
    width: 800px;
    margin: 0 auto;
}

#mapContainer {
    position:relative;
    height: 500px;
    width: 800px;
    border:10px solid #eaeaea;

}




    h3 {
    color: black; /* Синий цвет текста */
      padding: 5px;
           margin: 15px
    font-size: 14pt; /* Размер надписи */
      text-decoration: none;
        font-style: italic; /* Курсивное начертание */

   }

     a:hover {
    text-decoration: underline;

  </style>

</head>

<body>


     <h4 align=right>
          <?
        $id=  $_SESSION['id'];


 if (empty($_SESSION['login']) )

       {
                echo "
                <a href='login.php'>    Вход </a>     "  ;
               echo "
                <a href='reg.php'>    &nbsp &nbsp Регистрация </a>     "   ;

         ?>
     </h4>
      <?

}



   else
//{


//код страницы

{

    ?>
     </h4>
      <?


include ("menu.php");  }



   ?>

           <HR WIDTH="100%" SIZE="3">


       <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
       <script src="http://yandex.st/jquery/1.5.0/jquery.min.js" type="text/javascript"></script>
<script src="http://api-maps.yandex.ru/2.0/?load=package.full&lang=ru-RU" type="text/javascript"></script>
<script type="text/javascript">
        ymaps.ready(init);

        function init () {

if(navigator.geolocation) {

navigator.geolocation.getCurrentPosition(function(position) {
            var latitude = position.coords.latitude;
            var longitude = position.coords.longitude;

                var  myMap = new ymaps.Map("mapContainer", {
                    center: [latitude,longitude],
                    zoom: 16
                });

            myMap.controls
                .add('zoomControl')
                .add('typeSelector')
                .add('mapTools');

        var myPlacemark = new ymaps.Placemark([latitude,longitude], {
                    }, {
                        preset: "twirl#redIcon"
                    });
                // Добавляем метку в коллекцию
                myMap.geoObjects.add(myPlacemark);
  });
} else {
    alert("Geolocation API не поддерживается в вашем браузере");
}


}





</script>







<link href='http://fonts.googleapis.com/css?family=Vollkorn:700italic,400' rel='stylesheet' type='text/css'>

<link href='maps-style.css' rel='stylesheet' type='text/css'>

</head>

<body>

      <form action="Rassearch.php" method="post">


  <h2>
    Расширенный поиск<br>

  </h2>
 <!-- <p>
    Название:
    <input name="name" type="textarea" size="150" maxlength="1500">

   &nbsp  &nbsp  Тип перевозок:
   <select name="type">
    <option value="Авто менее 3т">   Авто менее 3т      </option>
      <option value="Авто более 3т">   Авто более 3т      </option>
      <option value="ж/д">   Ж/Д      </option>
       <option value="авиа">   Авиа    </option>
             <option value="Речной ">   Речной       </option>
      <option value="Морской">   Морской      </option>

      </select>
       &nbsp  &nbsp  Тип груза:


          <select name="type">
    <option value=" Стандартные грузы  ">    Стандартные грузы       </option>
      <option value="Нестандартные грузы">   Нестандартные грузы     </option>
      <option value="Скоропортящиеся грузы">   Скоропортящиеся грузы     </option>
       <option value="Живые грузы">  Живые грузы    </option>
             <option value="Наливные грузы (жидкие) ">   Наливные грузы (жидкие)      </option>
      <option value="Сборные грузы">  Сборные грузы     </option>
            <option value="Наливные грузы (жидкие) ">   Негабаритные грузы     </option>
      <option value="Опасные грузы"> Опасные грузы    </option>

      </select>


   -->


  <!--  <input name="gruz" type="select " size="150" maxlength="15">





  &nbsp  &nbsp  Адрес:
    <input name="mesto" type="textarea " size="150" maxlength="15">




  </p>
<!--**** В поле для паролей (name="password" type="password") пользователь вводит свой пароль ***** -->
<p>
<input type="checkbox" name="geo"  value="1">   искать ближайшие

<input type="submit" name="submit" value="поиск">

<!--**** Кнопочка (type="submit") отправляет данные на страничку save_user.php ***** -->
</p></form>

 -->    
           <HR WIDTH="100%" SIZE="3">


    <div id="wrap">

<div id="mapContainer"></div>
</div>
             <form action="geopoisk.php" method="post">


         <br><br>

     <p align=center>  Ваше текущее местоположение:
    <input name="ia" type="textarea" size="1500" maxlength="1500" value="">




     Ближайшиее в радиусе:
    <input name="R" type="text " size="1" maxlength="15"  style="width: 25; "> км
                 <input type="submit" name="submit" value="Поиск рядом">
           <!--**** Кнопочка (type="submit") отправляет данные на страничку save_user.php ***** -->

             </p>
        <table > <tr >  <td width=3%></td>
            <td >












<!--**** save_user.php - это адрес обработчика. То есть, после нажатия на кнопку "Зарегистрироваться",
данные из полей отправятся на страничку save_user.php методом "post" ***** -->


            </td>
             <td width=3% ></td>
  </tr>

  </table>


  </br>


<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="js/bootstrap.min.js"></script>





                           <script type="text/javascript">
 geo_position_js.init()

function lookup_location() {
  geo_position_js.getCurrentPosition(show_map, show_map_error);
}


function show_map(loc) {
  $("#geo-wrapper").css({'width':'320px','height':'350px'});
  var map = new GMap2(document.getElementById("geo-wrapper"));
  var center = new GLatLng(loc.coords.latitude, loc.coords.longitude);
  map.setCenter(center, 14);
  map.addControl(new GSmallMapControl());
  map.addControl(new GMapTypeControl());
  map.addOverlay(new GMarker(center, {draggable: false, title: "Вы здесь"})); }


function show_map_error() {
  $("#live-geolocation").html('Не могу определить местоположение.');
}









  </script>



  <script src="http://yandex.st/jquery/1.5.0/jquery.min.js" type="text/javascript"></script>



<script src="gears_init.js"></script>
<script src="geo.js"></script>


</body>

</html>