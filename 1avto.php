<?php
// ��� ��������� �������� �� ������. ������ � ��� �������� ������ ������������, ���� �� ��������� �� �����. ����� ����� ��������� �� � ����� ������ ���������!!!
session_start();


?>
<html>

<head>
  <title>1��</title>
   <link href="bootstrap.min.css" rel="stylesheet">
         <meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />







   </style>
    <script type="text/javascript">
var height=10;
var width=10;


 // setTimeout('location.replace("geo.php")', 0);

//  window.location.href = "http://cloud-logistics.ru/rp2.php?geo3";

</script>

    <script type="text/javascript">

navigator.geolocation.getCurrentPosition(
    function(position) {

    var h=position.coords.latitude;
       var s="+";
var w=position.coords.longitude;
	 //   alert('��������� ��� ��� �������� �����: ' +
	  //	    position.coords.latitude + ", " + position.coords.longitude);
            window.location.href = "http://geo.ru/rp3.php?"+h+s+w;
	}

);





   /* ����������� ������� ��������� � ������� ����������
 * Geolocation (GNSS, WiFi, CellID, IP) � Yandex.API
 */
  function getPosition() {
    if(navigator.geolocation) {
      navigator.geolocation.getCurrentPosition(
        // �������� ���������� ������� ����������
        googleAPI,
        // �����, ���������� ���������� ������ ������ �� IP-������ � ������� ������.API
        yandexAPI,
        // ���������
        {
          enableHighAccuracy: true,      // ����� ������� ��������
          timeout: 27000,                // ����������� ����� �������� ������ (� �������������)
          maximumAge: 0                  // ������������ ����� ����� ���������� ������
        }
      );
    }
    else {
      yandexAPI();
    }
    // ������������� ������ ������ ����� �� ������ ����� 30 ������
    setTimeout("getPosition()", 30000);
  }


/* ���������� ���������� � ������� Google.API
 */
  function googleAPI(position) {
    alert(position.coords.latitude+", "+position.coords.longitude);
  }


/* ���������� ���������� � ������� Yandex.API
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
    color: black; /* ����� ���� ������ */
      padding: 5px;
           margin: 15px
    font-size: 14pt; /* ������ ������� */
      text-decoration: none;
        font-style: italic; /* ��������� ���������� */

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


         ?>
     </h4>
      <?

}



   else
//{


//��� ��������

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
                // ��������� ����� � ���������
                myMap.geoObjects.add(myPlacemark);
  });
} else {
    alert("Geolocation API �� �������������� � ����� ��������");
}


}





</script>







<link href='http://fonts.googleapis.com/css?family=Vollkorn:700italic,400' rel='stylesheet' type='text/css'>

<link href='maps-style.css' rel='stylesheet' type='text/css'>

</head>

<body>




    <div id="wrap">

<div id="mapContainer"></div>
</div>


         <br><br>



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
  map.addOverlay(new GMarker(center, {draggable: false, title: "�� �����"})); }


function show_map_error() {
  $("#live-geolocation").html('�� ���� ���������� ��������������.');
}









  </script>



  <script src="http://yandex.st/jquery/1.5.0/jquery.min.js" type="text/javascript"></script>



<script src="gears_init.js"></script>
<script src="geo.js"></script>


</body>

</html>