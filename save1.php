<?php
// вся процедура работает на сесиях. Именно в ней хранятся данные пользователя, пока он находится на сайте. Очень важно запустить их в самом начале странички!!!
session_start();
?>
      <script type="text/javascript">
setTimeout('location.replace("profil.php")',0);
</script>
<?php
             $id= $_SESSION['id'];
           $type=" ";
            $name=" ";    $telephone=" ";
            $X=" ";
 $Y=" ";
$type=" ";
$gruz=" ";

$cena=" ";

$goroda=" ";



              $email=" ";    $mesto=" ";    $about=" ";

            $uadres=" ";
 $uname=" ";
 $inn=" ";
 $ogrn=" ";
 $okpo=" ";
 $kpp=" ";
 $oo=" ";








           include ("bd.php");



    $result = mysql_query("SELECT * FROM pro where WHERE `id`=$id",$db);
  //  $row=mysql_fetch_array($result);
        echo     $row['id'];

      echo     $row['name'];




      $query = sprintf("SELECT * FROM pro
    WHERE id=$id");
  //  mysql_real_escape_string($firstname),
  //  mysql_real_escape_string($lastname));

// Выполняем запрос
$result = mysql_query($query);

// Проверяем результат
// Это показывает реальный запрос, посланный к MySQL, а также ошибку. Удобно при отладке.
if (!$result) {
    $message  = 'Неверный запрос: ' . mysql_error() . "\n";
    $message .= 'Запрос целиком: ' . $query;
    die($message);
}



  





$name=$_POST['name'];
$email=$_POST['email'];
$telephone=$_POST['telephone'];


 $X=$_POST['X'];

 $Y=$_POST['Y'];

$type=$_POST['type0'].$_POST['type1'].$_POST['type2'].$_POST['type3'];
$gruz=$_POST['gruz0'].$_POST['gruz1'].$_POST['gruz2'].$_POST['gruz3'].$_POST['gruz4'].$_POST['gruz5'].$_POST['gruz6'].$_POST['gruz7'];

$cena=$_POST['cena'];

$goroda=$_POST['goroda'];


$mesto=$_POST['mesto'];
$about=$_POST['about'];




 $uadres=$_POST['uadres'];
 $uname=$_POST['uname'];
 $inn=$_POST['inn'];
 $ogrn=$_POST['ogrn'];
 $okpo=$_POST['okpo'];
 $kpp=$_POST['kpp'];
 $oo=$_POST['oo'];


   echo "id=".$id;
//$id=2;
    include ("bd.php");// файл bd.php должен быть в той же папке, что и все остальные, если это не так, то просто измените путь

           $query = "DELETE FROM `pro` WHERE `id`=$id";
  mysql_query($query) or die(mysql_error());




//mysql_query("SET CHARACTER SET 'utf-8'");
//mysql_query("SET NAMES 'utf-8");

// если такого нет, то сохраняем данные



//---------------     транслетация

            $m=$mesto;


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



    $mesto = preg_replace('~[^A-Z-a-z0-9_]+~u', '%20', $mesto);



//-------------------------------------Геокодирование


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

             $adres = str_replace (',',' ', $mesto);
                  $adres = str_replace (' ','%20', $mesto);
                                          echo    $adres;

$res = api_req("http://api.opencagedata.com/geocode/v1/json?q=$adres&key=02e279e3a40b06080cc5e76ae3579bd7","GET",$headers);
                     print $obj->{'status'}->{'message'}; // 12345
          print $obj->{'total_results'};

     $obj = json_decode($res);
print $obj->{'results'}[0]->{'geometry'}->{'lng'}; // 12345

    print $obj->{'results'}[0]->{'geometry'}->{'lat'}; // 12345

    $X=   $obj->{'results'}[0]->{'geometry'}->{'lat'};
    $Y=  $obj->{'results'}[0]->{'geometry'}->{'lng'};

//     print $obj->{'rate'}->{'limit'};






 //-----------------------------------------






$query2 = "INSERT INTO pro
VALUES('$id' ,

 '$name' ,
 '$m' ,

 '$X' ,

 '$Y' ,

'$type' ,
'$gruz' ,

'$cena' ,

'$goroda' ,


 '$email'  ,

 '$telephone' ,
 '$about' ,


 '$uadres' ,
 '$uname' ,
 '$inn',
 '$ogrn',
 '$okpo' ,
 '$kpp' ,
 '$oo' )";

$result2 = MYSQL_QUERY($query2);


// Проверяем, есть ли ошибки
if ($result2=='TRUE')
{
echo "Сохранено";
}

else {
echo "Ошибка! ";
     }


?>