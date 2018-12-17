<?php
require "connect.php";

function kontrola($val, $len, $nazev)
{
	if (isset($val)) {
		if (strlen($val) > $len) {
			return;
		}
	}

	$result = array();
	$result["error"] = true;
	$result["html"] = '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a> '. $nazev . ' můsí být delší jak '. $len .' </div>';
	

	echo json_encode($result);

	die();
}

kontrola($_POST['que'], 4, "Otázka");
kontrola($_POST['ans'], 10, "Odpověď");


$question = $_POST["que"];
$answer = $_POST["ans"];
	

$databaze->query("INSERT INTO faq (question,answer ) VALUES ('$question', '$answer')"); // vykoná SQL kód






$result = array();
$result["error"] = false;
$result["html"] = "";

/// Vypis z databaze
$radky = $databaze->query("SELECT * FROM faq");

$radky = mysqli_fetch_all($radky, MYSQLI_ASSOC);

foreach ($radky as $radek)
{ 

		$result["html"] .= ' <div class="card">
		    
		    <div class="card-header" id="headingOne">
		      <h5 class="mb-0">
		        <button class="btn btn-link" data-toggle="collapse" data-target="#collapse_'. $radek["id"] .'" aria-expanded="true" aria-controls="collapseOne">
		          '. $radek["question"] .'
		        </button>
		        <a class="float-right" href="../delete.php?id='. $radek["id"] .'"><i class="fas fa-times fa-2x"></i></a>
		      </h5>
		    </div>

		    <div id="collapse_'. $radek["id"] .'" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
		      <div class="card-body">
		        '. $radek["answer"] .'
		      </div>
		    </div>
			  </div>';
	
	}

	echo json_encode($result); //vezme php array a předělá jej na javascriptový objekt

	$databaze->close();				
?>