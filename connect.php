<?php	
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "prvni_databaze";
	
	$databaze = new mysqli($servername, $username, $password, $dbname); // připojí
	$databaze->query("SET NAMES utf8"); // vykoná SQL kód
		
	function redirect($kam)
	{
		header("Location: " . $kam);
	}
