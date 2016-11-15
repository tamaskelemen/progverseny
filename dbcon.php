<?php
	$dbcon = mysql_connect('localhost', 'root', '');
if(!$dbcon) { die("Cannot connect to the database!"); }
mysql_select_db('olimpia', $dbcon);
mysql_set_charset("utf8", $dbcon);

?>