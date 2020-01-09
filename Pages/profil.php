<?php
	$header_title = "Můj profil";
	$file_prefix = "../";
	require "../header.php"; 
  redirectIfNotLoggenIn();


$name = $_SESSION["jmeno"];
$user = $databaze->query('SELECT * FROM users WHERE id=' . $_SESSION['id'])->fetch_assoc();

?>
  
<div class="uvod">
  <p>Nastavení a správa hesla</p>
</div>
<div class="profil d-flex justify-content-center">

<div class="mt-3 col-sm-9">
  
<div class="tab-content">
  <div class="tab-pane active" id="home">
              <div class="form-group">
                
                <div class="col-xs-6">
                    <label for="first_name"><h4>Jméno</h4></label>
                    <input type="text" class="form-control" name="name" id="first_name" placeholder="first name" title="enter your first name if any." value="<?= $user['name'] ?>">
                </div>
            </div>
    
            <div class="form-group">
                
                <div class="col-xs-6">
                    <label for="phone"><h4>Telefoní číslo</h4></label>
                    <input type="text" class="form-control" name="phone" id="phone"  title="enter your phone number if any." value="<?= $user['tel'] ?>"> 
                </div>
            </div>

            
            <div class="form-group">
                
                <div class="col-xs-6">
                    <label for="email"><h4>Email</h4></label>
                    <input type="email" class="form-control" name="email" id="email" title="enter your email." value="<?= $user['email'] ?>">
                </div>
            </div>
            <div class="form-group">
                
            </div>
            <div class="form-group">
<h1 class="pw_tittle">Změna hesla.</h1>
<form action="../change_pw.php" method="POST">  

                <div class="col-xs-6 odstup">

                    <label><h4>Původní heslo:</h4></label>
                    <input type="password" class="form-control" name="old_pw" placeholder="Zadej své aktuální heslo.">
                </div>
            </div>
            <div class="form-group">
                <div class="col-xs-6">
                  <label><h4>Zadej nové heslo:</h4></label>
                    <input type="password" class="form-control" name="new_pw" placeholder="Zadej nové heslo.">
                </div>
            </div>
            <div class="form-group">
                <div class="col-xs-6">
                  <label><h4>Potvrdit nové heslo:</h4></label>
                    <input type="password" class="form-control" name="new_pw_check" placeholder="Potvrdit nové heslo.">
                </div>
            </div>
            <div class="form-group">
                  <div class="col-xs-12">
                      <br>
                      <button class="btn btn-lg btn-success" type="submit"><i class="glyphicon glyphicon-ok-sign"></i>Uložit</button>
                  </div>
<?php 
    
    if (isset($_GET['success'])) {
      echo '<div class="alert alert-success" role="alert">Heslo úspěšně změněno.</div>';
    }

    if (isset($_GET['error'])) {
      echo '<div class="alert alert-danger" role="alert">Špatné nebo neshodné heslo.</div>';
    }

?> 

</form>
</body>
<?php
	require '../footer.php';
?> 