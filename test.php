<?php
#require_once 'Zend/Loader.php';
#Zend_Loader::loadClass('Zend_Rest_Client');
#http://nominatim.openstreetmap.org/search
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

             $adres="Moscow,, Bauman";

                    $adres = str_replace (',','', $adres);;
                  $adres = str_replace (' ','%20', $adres);;
                   //    str_replace (' ','%20',$str);
                  echo    $adres;
$res = api_req("http://api.opencagedata.com/geocode/v1/json?q=$adres&key=02e279e3a40b06080cc5e76ae3579bd7","GET",$headers);


     $obj = json_decode($res);
print $obj->{'results'}[2]->{'geometry'}->{'lng'}; // 12345

    print $obj->{'results'}[0]->{'geometry'}->{'lat'}; // 12345
        print $obj->{'status'}->{'message'}; // 12345
          print $obj->{'total_results'};



//     print $obj->{'rate'}->{'limit'};

    echo "test";

?>
