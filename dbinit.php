<?php
    
    $admin_login = "admin"; //����� ��������������
    $admin_password = "k7n2glisr";   //������ ���������������
    
    $dbhost = "localhost";  //������ �� (� 90% ������� ��� localhost)
    $dbname = "CL";       //�������� ��
    $dbuser = "GM";       //������������ ��   
    $dbpass = "K7n2glisr"; //������ ������������ ��

    mysql_connect($dbhost, $dbuser, $dbpass);     //�� ��������!
    mysql_select_db($dbname);                     //�� ��������!

?>
