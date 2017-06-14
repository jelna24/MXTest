<?php
	$hostname='localhost';
	$user = 'root';
	$password = ' ';
	$mysql_database = 'mxtest';
	$db = mysql_connect($hostname, $user);
	mysql_select_db("mxtest", $db);
?>