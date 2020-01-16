<?php
require 'connect.php';

$id_komentare_kterej_se_ma_smazat = $_GET["id"];
$databaze->query(
					"DELETE FROM asynch WHERE id = $id_komentare_kterej_se_ma_smazat"
				);

redirect("Pages/asynch.php");

