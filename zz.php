<?php


function dump($arr, $die=false){
  echo "<pre>";
  print_r($arr);
  echo "</pre>";
  if($die){
    die;
  }
}

function tcp_send($board, $data) {
    $answer = "";
    $ip = gethostbyname($board);

    $fp = fsockopen($ip, 80);
    if($fp){
        foreach($data as $row){ // Set HTTP header
            fputs($fp, $row);
        }
        while(!feof($fp)){ // Get an answer
            $answer .= fread($fp, 512);
        }
        fclose($fp);
    }
    return $answer;
}
$host = " https://api.opencagedata.com/   ";
$useragent = "User-Agent: Mozilla/5.0 (Windows; U; Windows NT 5.1; ru; rv:1.8.1.2)";
$data = "a=".urlencode('Привет с Марса!');
echo dump(tcp_send($host,
    array(
        "POST / HTTP/1.1\r\n",
        "Host:  https://api.opencagedata.com   \r\n",
        "User-Agent: ".$useragent."\r\n",
        "Content-Type: application/x-www-form-urlencoded\r\n",
        "Content-Length: ".strlen($data)."\r\n",
        "Connection: close\r\n\r\n",
        $data,
    )
));
?>
