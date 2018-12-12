<?php
require "connect.php";

$name =  $_POST['login-name'];
$password = $_POST['login-password']; 


$result = $databaze->query("SELECT * FROM `users` WHERE name ='$name'"); // vykoná SQL kód
$result = mysqli_fetch_all($result, MYSQLI_ASSOC); 


foreach ($result as $user){
	if ($password == $user['password']) {
		$_SESSION["id"] = $user['id'];
		$_SESSION["jmeno"] = $user['name'];
		redirect("Pages/Kontakty.php");
		die();


	}
}
redirect("Pages/error.php");

?>