<?php
    
    $admin_login = "admin"; //����� ��������������
    $admin_password = "k7n2glisr";   //������ ���������������
    
    $dbhost = "localhost";  //������ �� (� 90% ������� ��� localhost)
    $dbname = "nov";       //�������� ��
    $dbuser = "root";       //������������ ��   
    $dbpass = "45091847"; //������ ������������ ��

    mysql_connect($dbhost, $dbuser, $dbpass);     //�� ��������!
    mysql_select_db($dbname);                     //�� ��������!

?>