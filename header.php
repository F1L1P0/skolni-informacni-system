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
	</head>

	<body>

<nav class="navbar navbar-expand-lg ">
  
  <a  class="navbar-brand text-white" href="<?= $file_prefix ?>index.php">SBTI</a>
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <i class="fas fa-bars text-white"></i>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      
      <li class="nav-item active">
        <a class="nav-link text-white" href="<?= $file_prefix ?>Pages/Aktuality.php">Aktuality </a>
      </li>

      <li class="nav-item">
        <a class="nav-link text-white" href="<?= $file_prefix ?>Pages/FAQ.php">FAQ</a>
      </li>

      <li class="nav-item active">
        <a class="nav-link text-white" href="<?= $file_prefix ?>Pages/Kontakty.php">Kontakty </a>
      </li>

      <li class="nav-item">
        <a class="nav-link text-white" href="<?= $file_prefix ?>Pages/Rozvrhy.php">Rozvrhy</a>
      </li>

      <li class="nav-item">
        <a class="nav-link text-white" href="<?= $file_prefix ?>Pages/znamkovaci_system.php">Známkovací systém</a>
      </li>

      <li class="nav-item dropdown">
	        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	          Další
	        </a>
	        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
	          <a class="dropdown-item" href="#">Action</a>
	          <a class="dropdown-item" href="#">Another action</a>
	          <div class="dropdown-divider"></div>
	          <a class="dropdown-item" href="#">Something else here</a>
	        </div>
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





    <?php

    	}

    ?>

  </div>

</nav>

<div class="container">