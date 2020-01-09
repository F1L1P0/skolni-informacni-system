<?php
	$header_title = "Můj profil";
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
             <div class="tab-pane" id="settings">
                
                
                  <hr>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="first_name"><h4>First name</h4></label>
                              <input type="text" class="form-control" name="first_name" id="first_name" placeholder="first name" title="enter your first name if any.">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                            <label for="last_name"><h4>Last name</h4></label>
                              <input type="text" class="form-control" name="last_name" id="last_name" placeholder="last name" title="enter your last name if any.">
                          </div>
                      </div>
          
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="phone"><h4>Phone</h4></label>
                              <input type="text" class="form-control" name="phone" id="phone" placeholder="enter phone" title="enter your phone number if any.">
                          </div>
                      </div>
          
                      <div class="form-group">
                          <div class="col-xs-6">
                             <label for="mobile"><h4>Mobile</h4></label>
                              <input type="text" class="form-control" name="mobile" id="mobile" placeholder="enter mobile number" title="enter your mobile number if any.">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label><h4>Email</h4></label>
                              <input type="email" class="form-control" name="email" id="email" placeholder="you@email.com" title="enter your email.">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="email"><h4>Location</h4></label>
                              <input type="email" class="form-control" id="location" placeholder="somewhere" title="enter a location">
                          </div>
                      </div>
                      <div class="form-group">
                <form action="../change_pw.php" method="POST">  
                          <div class="col-xs-6">
                              <label for="password"><h4>Password</h4></label>
                              <input type="password" class="form-control" name="password" id="password" placeholder="password" title="enter your password.">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                            <label for="password2"><h4>Verify</h4></label>
                              <input type="password" class="form-control" name="password2" id="password2" placeholder="password2" title="enter your password2.">
                          </div>
                      </div>
                      <div class="form-group">
                           <div class="col-xs-12">
                                <br>
                                <button class="btn btn-lg btn-success pull-right" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Save</button>
                                <!--<button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i> Reset</button>-->
                            </div>
                      </div>
                </form>
              </div>
               
              </div><!--/tab-pane-->
          </div><!--/tab-content-->

        </div><!--/col-9-->
    </div><!--/row-->
</div> -->