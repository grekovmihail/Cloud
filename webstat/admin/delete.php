<?php
if (@$isinclude == false) { Header("Location: index.php"); exit; }

if (!isset($_GET['new'])) { Header("Location: index.php"); exit; }

?>
<html>
<head>
<title>Simple News �����-����� | �������� �������</title>
</head>
<body>
<?php

$new_id = $_GET['new'];

	$query = "SELECT * FROM `news` WHERE `id`='$new_id' LIMIT 1";
        $result = mysql_query($query);
        if (mysql_num_rows($result) != 1)
        {
            print "<p><center>����� ������� �� ����������!!<p>\n<a href=\"news.php\">� ����� ���������� ���������</a><br />\n<a href=\"index.php\">� �������</a>\n"; exit;
	}

$query = "DELETE FROM `news` WHERE `id`='$new_id'";

if (mysql_query($query))
{
    print "<p><center>������� ������� �������!<p>\n<a href=\"news.php\">� ����� ���������� ���������</a><br />\n<a href=\"index.php\">� �������</a>\n";
}
else
{
    print "��������� ������:" . mysql_error() . "\n";
}
?>
</body>
</html> 