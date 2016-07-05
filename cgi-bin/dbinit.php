<?php
    
    $admin_login = "admin"; //Логин Администратора
    $admin_password = "k7n2glisr";   //пароль Админнистратора
    
    $dbhost = "localhost";  //Сервер БД (в 90% случаев это localhost)
    $dbname = "nov";       //название БД
    $dbuser = "root";       //пользователь БД   
    $dbpass = "45091847"; //Пароль пользователя БД

    mysql_connect($dbhost, $dbuser, $dbpass);     //Не Изменять!
    mysql_select_db($dbname);                     //Не Изменять!

?>