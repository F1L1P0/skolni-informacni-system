<?php
require 'connect.php';



$id_toho_kterej_se_ma_smazat = $_GET["id"];
$databaze->query(
					"DELETE FROM users WHERE id = $id_toho_kterej_se_ma_smazat"
				);


redirect("index.php");



