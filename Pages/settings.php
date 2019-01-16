<?php
	$header_title = "Nastavení";
	$file_prefix = "../";
	require "../header.php";
  redirectIfNotLoggenIn();
?>	

<form action="../change_pw.php" method="POST">
  <ul class="list-group profil">
    <li class="list-group-item active"><h1 style="text-align: center;">Změna hesla.</h1></li>
    <li class="list-group-item">Zadej své aktuální heslo: <input type="password" name="old_pw"></li>
    <li class="list-group-item">Zadej své nové heslo: <input type="password" name="new_pw"></li>
    <li class="list-group-item">Potvrdit nové heslo: <input type="password" name="new_pw_check"></li>
    <li class="list-group-item"><button type="submit" class="btn btn-primary">Uložit</button></li>

<?php 
    
    if (isset($_GET['success'])) {
      echo '<div class="alert alert-success" role="alert">Heslo úspěšně změněno.</div>';
    }

    if (isset($_GET['error'])) {
      echo '<div class="alert alert-danger" role="alert">Špatné nebo neshodné heslo.</div>';
    }

 ?>

  </ul>
</form>

   </body>
   
<?php
	require '../footer.php';
?> 