<?php
session_start();
if (!$_SESSION['admin']) { Header("Location: index.php"); exit; }

?>

<a href="news.php">���������� ���������</a><br />
<a href="logout.php">�����</a><br />