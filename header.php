<?php
require 'connect.php';

if (!isset($header_title)) {
	$header_title = "TITLE";
}
if (!isset($file_prefix)) {
	$file_prefix = "";
}
?>

<!DOCTYPE html>
<html>
	<head>
		<title><?= $header_title ?></title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="<?= $file_prefix ?>styl.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
		<link rel="icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR6XWZyRXNLb8t5_cp9aBpp_Z5jlL1rhfNC1zSv5YjhjFnETY-1">
	</head>

	<body>
		<nav class="navbar navbar-expand-lg ">
  		<a  class="navbar-brand navbar-hover" href="<?= $file_prefix ?>index.php">SBTI</a>
  		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    		<i class="fas fa-bars text-white"></i>
  		</button>

  		<div class="collapse navbar-collapse" id="navbarSupportedContent">
    		<ul class="navbar-nav mr-auto">
					<li class="nav-item">
						<a class="nav-link navbar-hover" href="<?= $file_prefix ?>Pages/FAQ.php">FAQ</a>
					</li>
					<li class="nav-item active">
						<a class="nav-link navbar-hover" href="<?= $file_prefix ?>Pages/Kontakty.php">Kontakty </a>
					</li>
					<li class="nav-item">
						<a class="nav-link navbar-hover" href="<?= $file_prefix ?>Pages/predmet.php">Rozvrhy</a>
					</li>
					<li class="nav-item">
						<a class="nav-link navbar-hover" href="<?= $file_prefix ?>Pages/asynch.php">asynch</a>
					</li>
   			</ul>

<?php
	if (!isset($_SESSION["id"]))
	{
?>
<form class="form-inline" action="<?= $file_prefix ?>login.php" method="post">
	<div class="input-group mx-1 my-2">
		<div class="input-group-prepend">
			<span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>
		</div>
		<input name="login-name" type="text" class="form-control" placeholder="Jméno">
	</div>

	<div class="input-group mx-1 my-2">
		<div class="input-group-prepend">
			<span class="input-group-text" id="basic-addon1"><i class="fas fa-lock"></i></span>
		</div>
		<input name="login-password" type="password" class="form-control" placeholder="Heslo">
	</div>

	<button class="btn btn-outline-light mx-2" type="submit">Přihlásit</button>
</form>

<?php

	}else{

?>
<form class="form-inline" action="<?= $file_prefix ?>logout.php" method="post">			
	<h3>
		<span class="badge badge-light"><?=$_SESSION["jmeno"]?></span>
	</h3>

	<button class="btn btn-outline-light mx-2" type="submit">Odhlásit</button>
</form>

<form>
	<input class="btn btn-outline-light" type="button"  onclick="window.location.href = '<?= $file_prefix ?>Pages/profil.php';" value="Můj profil"/>
</form>

<?php

    	}

    ?>

  </div>

</nav>

<div class="container">