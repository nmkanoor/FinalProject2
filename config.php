<?php
$hostname = 'sql2.njit.edu';
$db_username = 'nk352@webhost01.ucs.njit.edu';
$db_password = 'KACSleed5';
$dbname = 'nk352';
$link = mysql_connect($hostname, $db_username, $db_password) or die("Cannot connect to the database");
mysql_select_db($dbname) or die("Cannot select the database");
?>

