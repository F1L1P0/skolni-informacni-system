<?php
	$header_title = "Můj profil";
	$file_prefix = "../";
	require "../header.php";
  	redirectIfNotLoggenIn();




// if(isset($_GET["i"]))
// {
// 	if ($_GET["i"] == $_SESSION['id']) {
// 		// můj profil
// 	}else{
// 		// cizí profil
// 	}
// }else{
// 	//redirect("../");
// }




// $databaze->query('SELECT * FROM users WHERE id=')

//$tel=
//$email=
//$role=


?>
<div class="profil">
<div class="container bootstrap snippet">
    <div class="row">
  		<div class="col-sm-3"><!--left col-->
              

      <div class="text-center">
        <img src="http://ssl.gstatic.com/accounts/ui/avatar_2x.png" class="avatar img-circle img-thumbnail" alt="avatar">
        <h6>Upload a different photo...</h6>
        <input type="file" class="text-center center-block file-upload">
      </div><br>

               
          <div class="panel panel-default">
            <div class="panel-heading">Další kontakty</div>
            <div class="panel-body">
            	<i class="fa fa-facebook fa-2x"></i> <i class="fa fa-github fa-2x"></i> <i class="fa fa-twitter fa-2x"></i> <i class="fa fa-pinterest fa-2x"></i> <i class="fa fa-google-plus fa-2x"></i>
            </div>
          </div>
          
        </div><!--/col-3-->
    	<div class="col-sm-9">
            

              
          <div class="tab-content">
            <div class="tab-pane active" id="home">
 	                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="first_name"><h4>Jméno</h4></label>
                              <input type="text" class="form-control" name="first_name" id="first_name" placeholder="first name" title="enter your first name if any.">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                            <label for="last_name"><h4>Příjmení</h4></label>
                              <input type="text" class="form-control" name="last_name" id="last_name" placeholder="last name" title="enter your last name if any.">
                          </div>
                      </div>
          
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="phone"><h4>Telefoní číslo</h4></label>
                              <input type="text" class="form-control" name="phone" id="phone" placeholder="enter phone" title="enter your phone number if any.">
                          </div>
                      </div>
          
                      
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="email"><h4>Email</h4></label>
                              <input type="email" class="form-control" name="email" id="email" placeholder="you@email.com" title="enter your email.">
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