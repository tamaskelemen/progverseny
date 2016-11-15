<?php
	$p = 'felhasznalo';
	$sql = "SELECT * FROM $p;";
	$eredmeny = mysql_query($sql);
	
	while($result = mysql_fetch_array($eredmeny)){
		
		echo $result['felhasznalo'];
	}

?>