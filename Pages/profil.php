<?php
	$header_title = "FAQ";
	$file_prefix = "../";

	require "../header.php";


if(isset($_GET["i"]))
{
	if ($_GET["i"] == $_SESSION['id']) {
		// můj profil
	}else{
		// cizí profil
	}
}else{
	//redirect("../");
}




$databaze->query('SELECT * FROM users WHERE id=')

//$tel=
//$email=
//$role=









?>

	<div class="front side">
		<div class="content">
			<h1>Hakkam Abdullah</h1>
			<p>I am a graphic designer and art director. I am as well specialised in front end web design, user experience and creating identities. Throughout my career, I have worked with companies of all shapes and sizes that enriched my experience
			</p>
		</div>
	</div>
	<div class="back side">
		<div class="content">
			<h1>Podrobnosti</h1>
			<form>
				<label>Jméno :</label>
				<p>Filip Drábek</p>
				<label>Your E-mail :</label>
				<input type="text" placeholder="Example@mail.com">
				<label>Your message :</label>
				<textarea placeholder="The Subject"></textarea>
			</form>
		</div>
	</div>


<?php
	require '../footer.php';
?> 