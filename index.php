
	<?php include('header.php');
  require_once('inc/bdd.php');
  $select=$bdd->query('SELECT * FROM accueil');
  $slides= $select->fetchAll();
  ?>
<br>
<div class="container">
<div class="row">
<div class="col-md-12">
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="<?= $slides['0']['url'] ?>" height="300" width="400" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?= $slides['1']['url'] ?>"  height="300" width="400" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?= $slides['2']['url'] ?>" height="300" width="400" alt="Third slide">
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
<div class="container">
  <div class="row">
    <div class="col-md-12"></div>
  </div>
</div>
<div class="row mt-5">
  <div class="col-md-8">
  <h2><u>Présentation de notre boutique : </u></h2>
    <p>
      Présentation <strong>A-Team</strong> : Fondée en 2018, une Collection qui propose un grand choix de vêtements chaussure, pantalon, t-shirt, robe, manteau.
      Retrouvez entre autres les plus grandes marques du Maroc.
      Grand choix d'accessoires de mode : casquettes, chaussette, ceinture.
      Nous expédions les commandes sous 24h du lundi au vendredi par colissimo ou en express avec TNT. 
      Paiement CB sécurisé.
      
    </p>
  </div>
  <div class="col-md-4">
	<img src="//placehold.it/80x80">
    <img src="//placehold.it/80x80">
    <img src="//placehold.it/80x80">
    <img src="//placehold.it/80x80">
  </div>
  </div>
  </div>
</div>

	<?php include('footer.php'); ?>

