<?php
$x= file_get_contents('http://www.ok-karapuz.ru/search/index.php?PAGE_ELEMENT_COUNT=100&q=%EF%EE%E4%E3%F3%E7%ED%E8%EA%E8&s=%CF%EE%E8%F1%EA');

 // �� ������� <p>
//echo strip_tags($text, '<p>');
//$x=strip_tags($x, '<div>');
         // ��������� ������ �� ������������� ����� ������� � ���������� ��������,
// ������� �������� � ����  " ", \r, \t, \n � \f
//$x = preg_split(" ", $x);

//print_r(str_word_count($x, 2));

echo $x;


?>