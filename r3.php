<?php
// ��� ��������� �������� �� ������. ������ � ��� �������� ������ ������������, ���� �� ��������� �� �����. ����� ����� ��������� �� � ����� ������ ���������!!!
session_start();


?>
<html>

<head>
  <title>����������� �����</title>
   <link href="bootstrap.min.css" rel="stylesheet">
         <meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />

    <script type="text/javascript">
var height=10;
var width=10;


 // setTimeout('location.replace("geo.php")', 0);

//  window.location.href = "http://cloud-logistics.ru/rp2.php?geo3";

</script>




    <script type="text/javascript">


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


  </style>

</head>

<body>






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

      <form action="Rassearch.php" method="post">


  <h2>
    ����������� �����<br>

  </h2>
  <p>
    ��������:
    <input name="name" type="textarea" size="150" maxlength="1500">

   &nbsp  &nbsp  ��� ���������:
   <select name="type">
    <option value="���� ����� 3�">   ���� ����� 3�      </option>
      <option value="���� ����� 3�">   ���� ����� 3�      </option>
      <option value="�/�">   �/�      </option>
       <option value="����">   ����    </option>
             <option value="������ ">   ������       </option>
      <option value="�������">   �������      </option>

      </select>
       &nbsp  &nbsp  ��� �����:


          <select name="type">
    <option value=" ����������� �����  ">    ����������� �����       </option>
      <option value="������������� �����">   ������������� �����     </option>
      <option value="��������������� �����">   ��������������� �����     </option>
       <option value="����� �����">  ����� �����    </option>
             <option value="�������� ����� (������) ">   �������� ����� (������)      </option>
      <option value="������� �����">  ������� �����     </option>
            <option value="�������� ����� (������) ">   ������������ �����     </option>
      <option value="������� �����"> ������� �����    </option>

      </select>





  <!--  <input name="gruz" type="select " size="150" maxlength="15">     -->





  &nbsp  &nbsp  �����:
    <input name="mesto" type="textarea " size="150" maxlength="15">




  </p>
<!--**** � ���� ��� ������� (name="password" type="password") ������������ ������ ���� ������ ***** -->
<p>
<input type="checkbox" name="geo"  value="1">   ������ ���������

<input type="submit" name="submit" value="�����">

<!--**** �������� (type="submit") ���������� ������ �� ��������� save_user.php ***** -->
</p></form>
           <HR WIDTH="100%" SIZE="3">


    <div id="wrap">

<div id="mapContainer"></div>
</div>
             <form action="geopoisk.php" method="post">


         <br><br>

     <p align=center>  ���� ������� ��������������:
    <input name="ia" type="textarea" size="1500" maxlength="1500" value="">




     ���������� � �������:
    <input name="R" type="text " size="1" maxlength="15"  style="width: 25; "> ��
                 <input type="submit" name="submit" value="����� �����">
           <!--**** �������� (type="submit") ���������� ������ �� ��������� save_user.php ***** -->

             </p>
        <table > <tr >  <td width=3%></td>
            <td >





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