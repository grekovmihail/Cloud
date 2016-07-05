<!DOCTYPE HTML>

<html>

<head>
  <title>Untitled</title>
</head>

<body>





<?php
$myCurl = curl_init();
curl_setopt_array($myCurl, array(
    CURLOPT_URL => 'https://api.opencagedata.com/geocode/v1/xml?q=Moscow&key=02e279e3a40b06080cc5e76ae3579bd7
',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => http_build_query(array(/*здесь массив параметров запроса*/))
));
$response = curl_exec($myCurl);
curl_close($myCurl);

echo "Ответ на Ваш запрос: ".$response;



?>











</body>

</html>