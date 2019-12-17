<?php
	$header_title = "SBTI";
	require "header.php";

	
?>
<div class="row">
  <div class="col-12 mt-3">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="w-100" src="https://images.pexels.com/photos/267885/pexels-photo-267885.jpeg?auto=compress&cs=tinysrgb&h=650&w=940" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="w-100" src="https://images.pexels.com/photos/289740/pexels-photo-289740.jpeg?cs=srgb&dl=chairs-classroom-college-289740.jpg&fm=jpg" alt="Second slide">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<?php
	require 'footer.php';
?> 