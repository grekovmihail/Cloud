<?php
    
    include "dbinit.php";
    
    $query = "SELECT * FROM `news`";
    $result = mysql_query($query);

    if (!$result)
    {
	  print "<center><img src=\"news.gif\"><br>ошибка:" . mysql_error() . "<br></center>";
    }
    elseif (mysql_num_rows($result) == 0)
    {
	 print "<center><img src=\"news.gif\"><br>Новостей нет<br></center>";
    }
    else
    {
	 $rows = array();
	 while ($row = mysql_fetch_assoc($result)) 
	 {
	     $rows[]= $row;
	 }
         $rows = array_reverse($rows);
         foreach($rows as $row)
         {  
	     print "<center><img src=\"news.gif\"><br><b>{$row['date']}</b><br>{$row['text']}<br></center>";    
         }
    }
