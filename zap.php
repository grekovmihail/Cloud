   <meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
<?php
        include ("bd.php");


            $name="Греция";                   $avia= "1" ;

                         $ex="1" ; $tih= "1" ; $TR= "0" ; $Sport= "Зимний" ;


                         $Rus= "0" ; $Zg="1" ; $viza="0" ; $pl="1" ; $t="1";
                            $TR="1";

                          $id=16;

    $query2 = "INSERT INTO zp
VALUES('$id','$name','$Rus','$Zg','$viza','$pl','$t','$avia','$ex','$tih','$TR','$Sport')";
     $result2 = MYSQL_QUERY($query2);

         if ($result2=='TRUE')
{
echo "Сохранено";
}

else {
echo "Ошибка.";
     }


?>