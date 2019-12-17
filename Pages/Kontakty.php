<?php
    $header_title = "Kontakty";
    $file_prefix = "../";
    require "../header.php";
    if(isset($_SESSION['id']))
    {
    $user = $databaze->query('SELECT * FROM users WHERE id=' . $_SESSION['id'])->fetch_assoc();
    }


?>
<div class="center-header">
    <span>Kontakty</span>
    <form action="pridat_uzivatele" method="POST">
        <button id="add_user" type="button" class="btn btn-light btn-lg mx-1 my-auto d-inline-block" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-plus" ></i></button>
    </div>
    </form>
</div>
<?php 


    if (isset($user) && $user['role'] == "Admin")
    {
?>

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
                        <p class="card-text text-left">Telefoní číslo : <?= $radek["tel"]?>.</p>
                        <p class="card-text text-left">email : <?= $radek["email"]?>.</p>
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