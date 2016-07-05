<?php

session_start();

if (!$_SESSION['admin']) { Header("Location: index.php"); exit; }

if (@$isinclude == false) { Header("Location: index.php"); exit; }

if (!isset($_GET['new'])) { Header("Location: index.php"); exit; }

?>
<html>
<head>
<title>Simple News Админ-Центр | Редактирование новости</title>
<script type="text/javascript">
function insBB(oTag, cTag) {
var sel = document.selection.createRange();
if (sel.text > '') {
sel.text = oTag + sel.text + cTag;
} else {
document.addform.addtext.value = document.addform.addtext.value + oTag + cTag;
}
}
</script>
</head>
<body>
<?php

$date = date("d.m.Y H:i:s");
echo "<center><small>$date</small></center><p>\n";

$new_id = $_GET['new'];

	$query = "SELECT * FROM `news` WHERE `id`='$new_id' LIMIT 1";
        $result = mysql_query($query);
        if (mysql_num_rows($result) != 1)
        {
            print "<p><center>Такой новости не существует!!<p>\n<a href=\"news.php\">В центр Управления новостями</a><br />\n<a href=\"index.php\">В админку</a>\n"; exit;
	}
$phpself = $_SERVER["PHP_SELF"]."?do=edit&new=$new_id";
$print_form = 0;

    if (@$_POST)
    {
        $post_date =  $_POST['date'];
	$text = $_POST['addtext'];        
	$text = htmlspecialchars($text);
        $text = bb_to_html($text);
	$text = nl2br($text);
	if (strlen($text) > 5000)
	{
	    print "Максимальная дина сообщения 5000 символов.<br>\n"; 
            $print_form = 1;
	}
	elseif (strlen($text) <= 1)
	{
	    print "Минимальная дина сообщения 1 символов.<br>\n"; 
            $print_form = 1;
	}
        else
        {
	    $query = "UPDATE `news` SET `date`='$post_date', `text`='$text' WHERE `id`='$new_id'";
	    if (mysql_query($query))
	    {
	        print "<p><center>Новость редактирована успешно!<p>\n<a href=\"news.php\">В центр Управления новостями</a><br />\n<a href=\"index.php\">В админку</a>\n";
            }
            else
            {
                print "Произошла ошибка:" . mysql_error() . "\n";
            }
         }
    }       
    else
    {
        $print_form = 1;
    }
    
    if ($print_form == 1)
    {
	$query = "SELECT * FROM `news` WHERE `id`='$new_id'";
        $result = mysql_query($query);
        $row = mysql_fetch_assoc($result);
        
        $row_date = $row['date'];
        $row_text = $row['text'];
	$row_text = str_replace("<br />", "", $row_text);	
	$row_text = html_to_bb($row_text);
	?>
	<form name="addform" action="<?=$phpself ?>" method="POST">
        Дата:<br><input type="text" name="date" value="<?=$row_date ?>"><p>
	<input type=button onClick="insBB('[b]', '[/b]')" title="Жирный" value=" B "> |
	<input type=button onClick="insBB('[i]', '[/i]')" title="Курсив" value=" I "> |
	<input type=button onClick="insBB('[u]', '[/u]')" title="Подчеркивание" value=" U "> |
	<input type=button onClick="insBB('[center]', '[/center]')" title="отцентрировать" value=" center "> |	
	<input type=button onClick="insBB('[font=Verdana]', '[/font]')" title="Шрифт" value=" A ">	
	<select OnChange="insBB('[size=' + this.options[this.selectedIndex].value + ']', '[/size]'); this.selectedIndex = 0;"> |
	        <option>Размер</option>
	        <option value="8">8</option>
		<option value="10">10</option>
		<option value="11">11</option>
		<option value="12">12</option>
		<option value="13">13</option>
		<option value="14">14</option>
		<option value="15">15</option>
		<option value="16">16</option>
		<option value="18">18</option>
		<option value="20">20</option>
		<option value="25">25</option>
	</select>
	<select OnChange="insBB('[color=' + this.options[this.selectedIndex].value + ']', '[/color]'); this.selectedIndex = 0;"> |
	        <option>Цвет текста</option>
	        <option style="color:red" value="red">Красный</option>
		<option style="color:purple" value="purple">Пурпурный</option>
		<option style="color:pink" value="pink">Розовый</option>
		<option style="color:orange" value="orange">Оранжевый</option>
		<option style="color:yellow" value="yellow">Жёлтый</option>
		<option style="color:green" value="green">Зелёный</option>
		<option style="color:teal" value="teal">Бирюзовый</option>
		<option style="color:blue" value="blue">Синий</option>
		<option style="color:navy" value="navy">Фиолетовый</option>
		<option style="color:brown" value="brown">Коричневый</option>
		<option style="color:gray" value="gray">Серый</option>
	</select>
	<input type=button onClick="insBB('[img]', '[/img]')" title="Вставка изображения" value=" img "> |
	<input type=button onClick="insBB('[url=]', '[/url]')" title="Вставить URL" value=" url ">
	<br><textarea name="addtext" cols=63 rows=10 value="" wrap="hard"><?=$row_text ?></textarea><br>
        <input type="submit" value="Принять изменения" /><br />
	</form>
        <a href="news.php">Центр Управления новостями</a><br />
        <a href="index.php">В админку</a>
        <?php
    }    

      function bb_to_html($str)
    {
	$bbcode = array(
		  '[b]',
		  '[i]',
                  '[u]',
		  '[center]',
		  '[/b]',
                  '[/i]',
                  '[/u]',
		  '[/center]'
		  );
	
	$html = array(
		'<b>',
		'<i>',
                '<u>',
		'<center>',
		'</b>',
                '</i>',
                '</u>',
		'</center>'
		);
				  
	$str = str_replace($bbcode, $html, $str);
		
	$bbcode = array(
		  '/\[font=(.+?)\]/i',
		  '/\[color=(.+?)\]/i',
                  '/\[size=(.+?)\]/i',
                  '/\[url=(.+?)\]/i',
		  '/\[img\](.+?)\[\/img\]/i'
		  );

	$html = array(
		'<font face="$1">',
		'<font color="$1">',
                '<font size="$1">',
                '<a href="$1">',
                '<img src="$1">'
		);

	$str = preg_replace($bbcode, $html, $str);
 
	$bbcode = array(
		  '[/font]',
		  '[/color]',
                  '[/size]',
		  '[/url]'
		  );
	
	$html = array(
		'</font>',
		'</font>',
                '</font>',
		'</a>'
		);
				  
	$str = str_replace($bbcode, $html, $str); 
	
	return $str;    
    }
    
    function html_to_bb($str)
    {
    	$html = array(
		'<b>',
		'<i>',
                '<u>',
		'<center>',
		'</b>',
                '</i>',
                '</u>',
		'</center>'
		);

	$bbcode = array(
		  '[b]',
		  '[i]',
                  '[u]',
		  '[center]',
		  '[/b]',
                  '[/i]',
                  '[/u]',
		  '[/center]'
		  );
				  
	$str = str_replace($html, $bbcode, $str);
	
	$html = array(
                  '/<font face="(.+?)">/i',
		  '/<font color="(.+?)">/i',
                  '/<font size="(.+?)">/i',
                  '/<a href="(.+?)">/i',
                  '/<img src="(.+?)">/i',
		  );

	$bbcode = array(
		'[font=$1]',
		'[color=$1]',
		'[size=$1]',
                '[url=$1]',
                '[img]$1[/img]'
		);

	$str = preg_replace($html, $bbcode, $str);

	$html = array(
		'</font>',
		'</font>',
                '</font>',
		'</a>'
		);
		
        $bbcode = array(
		  '[/font]',
		  '[/color]',
                  '[/size]',
		  '[/url]'
		  );
				  
	$str = str_replace($html, $bbcode, $str);
 
	return $str;
    }    

?>
</body>
</html> 