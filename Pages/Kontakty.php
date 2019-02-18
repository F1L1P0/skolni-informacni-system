<?php
    $header_title = "Kontakty";
    $file_prefix = "../";
    require "../header.php";
    if(isset($_SESSION['id']))
    {
    $user = $databaze->query('SELECT * FROM users WHERE id=' . $_SESSION['id'])->fetch_assoc();
    }


?>
<div class="jumbotron">
    <span>Kontakty</span>
<?php 


    if (isset($user) && $user['role'] == "Admin")
    {
?>
    <form action="pridat_uzivatele" method="POST">
        <button id="add_user" type="button" class="btn btn-light btn-lg mx-1 my-auto d-inline-block" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-plus" ></i></button>
        </div>
    </form>
<?php } ?>

<section id="team" class="pb-5">
   <div class="container">
        <div class="row">
<?php
$radky = $databaze->query("SELECT * FROM users")->fetch_all(MYSQLI_ASSOC);

foreach ($radky as $radek){ 
?> 

 
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="https://sunlimetech.com/portfolio/boot4menu/assets/imgs/team/img_01.png" alt="card image"></p>
                                    <h4 class="card-title"><?= $radek["name"] ?><br></h4>
                                    <p class="card-text">Pro více info najeďte na kartu</p>
                                    <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card-body text-center mt-4">
                                    <h4 class="card-title"><?= $radek["name"] ?><br></h4>
                                    <p class="card-text">Telefoní číslo : <?= $radek["tel"]?>.</p>
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="#">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="#">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="#">
                                                <i class="fa fa-skype"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="#">
                                                <i class="fa fa-google"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<?php 
  }
  
  $databaze->close();       
?>

    </div>
      </div></section>
    
<?php
  require '../footer.php';
?> 