<?php
if ($isinclude == false) { Header("Location: news.php"); exit; }

?>
<html>
<head>
<title>Simple News �����-����� | ���������� �������</title>
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

$phpself = $_SERVER["PHP_SELF"]."?do=add";
$print_form = 0;

    if (@$_POST)
    {
        $text = $_POST['addtext'];        
	$text = htmlspecialchars($text);
        $text = bb_to_html($text);
	$text = nl2br($text);
	if (strlen($text) > 5000)
	{
	    print "������������ ���� ��������� 5000 ��������.<br>\n"; 
            $print_form = 1;
	}
	elseif (strlen($text) <= 1)
	{
	    print "����������� ���� ��������� 2 �������.<br>\n"; 
            $print_form = 1;
	}
        else
        {
	    $query = "INSERT INTO `news` ( `date` , `text` ) 
	    VALUES (
   	    '$date', '$text'  
	    );";
	    if (mysql_query($query))
	    {
	        print "<p><center>������� ������� ���������!<p>\n<a href=\"news.php?do=add\">�������� ���</a><br>\n<a href=\"news.php\">� ����� ���������� ���������</a><br />\n<a href=\"index.php\">� �������</a>\n";
            }
            else
            {
                print "��������� ������:" . mysql_error() . "\n";
            }
         }
    }       
    else
    {
        $print_form = 1;
    }
    
    if ($print_form == 1)
    {
	?>
	<form name="addform" action="<?=$phpself ?>" method="POST">
	<input type=button onClick="insBB('[b]', '[/b]')" title="������" value=" B "> |
	<input type=button onClick="insBB('[i]', '[/i]')" title="������" value=" I "> |
	<input type=button onClick="insBB('[u]', '[/u]')" title="�������������" value=" U "> |
	<input type=button onClick="insBB('[center]', '[/center]')" title="��������������" value=" center "> |	
	<input type=button onClick="insBB('[font=Verdana]', '[/font]')" title="�����" value=" A ">	
	<select OnChange="insBB('[size=' + this.options[this.selectedIndex].value + ']', '[/size]'); this.selectedIndex = 0;"> |
	        <option>������</option>
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
	        <option>���� ������</option>
	        <option style="color:red" value="red">�������</option>
		<option style="color:purple" value="purple">���������</option>
		<option style="color:pink" value="pink">�������</option>
		<option style="color:orange" value="orange">���������</option>
		<option style="color:yellow" value="yellow">Ƹ����</option>
		<option style="color:green" value="green">������</option>
		<option style="color:teal" value="teal">���������</option>
		<option style="color:blue" value="blue">�����</option>
		<option style="color:navy" value="navy">����������</option>
		<option style="color:brown" value="brown">����������</option>
		<option style="color:gray" value="gray">�����</option>
	</select>
	<input type=button onClick="insBB('[img]', '[/img]')" title="������� �����������" value=" img "> |
	<input type=button onClick="insBB('[url=]', '[/url]')" title="�������� URL" value=" url ">
	<br><textarea name="addtext" cols=63 rows=10 wrap="hard"></textarea><br>
	<input type="submit" value="�������� �������" /><br />
	</form>
        <a href="news.php">����� ���������� ���������</a><br />
        <a href="index.php">� �������</a>
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

?>
</body>
</html>  