<?php
	require("constants.php");
	$mysqli = mysqli_connect(DB_SERVER,DB_USER, DB_PASS) or die(mysql_error());
	mysqli_select_db($mysqli, DB_NAME) or die("Cannot select DB"); 
?>