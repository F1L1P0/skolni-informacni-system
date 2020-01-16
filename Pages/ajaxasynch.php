<?php
require "../connect.php";
redirectIfNotLoggenIn();

$nadpis = $_POST["nadpis"];
$komentar = $_POST["komentar"];

$databaze->query("INSERT INTO asynch (komentar,nadpis ) VALUES ('$komentar', '$nadpis')"); // vykoná SQL kód
$result = array();
$result["error"] = false;
$result["html"] = "";

/// Vypis z databaze
$radky = $databaze->query("SELECT * FROM asynch");

$radky = mysqli_fetch_all($radky, MYSQLI_ASSOC);

foreach ($radky as $radek)
{ 

		$result["html"] .= ' <div class="card">
		    
		    <div class="card-header" id="headingOne">
		      <h5 class="mb-0">
		        <button class="btn btn-link" data-toggle="collapse" data-target="#collapse_'. $radek["id"] .'" aria-expanded="true" aria-controls="collapseOne">
		          '. $radek["nadpis"] .'
		        </button>
		        <a class="float-right" href="../delete.php?id='. $radek["id"] .'"><i class="fas fa-times fa-2x"></i></a>
		      </h5>
		    </div>

		    <div id="collapse_'. $radek["id"] .'" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
		      <div class="card-body">
		        '. $radek["komentar"] .'
		      </div>
		    </div>
			  </div>';
	
	}

	echo json_encode($result); //vezme php array a předělá jej na javascriptový objekt

	$databaze->close();				
?>