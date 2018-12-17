<?php
	$header_title = "FAQ";
	$file_prefix = "../";

	require "../header.php";


?> 
		<div class="jumbotron">
			<span>FAQ</span>
			<button id="add" type="button" class="btn btn-light btn-lg mx-1 my-auto d-inline-block" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-plus" ></i></button>

		</div>

		<?php
			require "popup.php";
		?>


		<div id="accordion">
<?php
	$radky = $databaze->query("SELECT * FROM faq");
	
	$radky = mysqli_fetch_all($radky, MYSQLI_ASSOC);

	foreach ($radky as $radek)
	{ ?>

			  <div class="card">
			    
			    <div class="card-header" id="headingOne">
			      <h5 class="mb-0">
			        <button class="btn btn-link" data-toggle="collapse" data-target="#collapse_<?= $radek["id"] ?>" aria-expanded="true" aria-controls="collapseOne">
			          <?= $radek["question"] ?>
			        </button>
			        <a class="float-right" href="../delete.php?id=<?= $radek["id"] ?>"><i class="fas fa-times fa-2x"></i></a>
			      </h5>
			    </div>

			    <div id="collapse_<?= $radek["id"] ?>" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
			      <div class="card-body">
			        <?= $radek["answer"] ?>
			      </div>
			    </div>
			  </div>
<?php	
	}

	$databaze->close();				
?>

		</div>
			
		
<?php
	require '../footer.php';
?> 