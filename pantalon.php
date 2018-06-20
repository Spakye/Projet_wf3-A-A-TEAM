
	<?php include('header.php'); ?>

<div class="container">
  <div class="row text-center">
    <h1>PANTALONS</h1>
  </div>
  <?php
  require_once('inc/bdd.php');
  $requete=$bdd->query('SELECT * FROM articles WHERE type="Jeans"');
  $pantalons=$requete->fetchAll();


  foreach ($pantalons as $pantalon) {
    echo '<hr><div class="row"><div class="col-md-6">';
    echo '<img src="'.$pantalon['url_pictures'].'" height="250" width="250">';
    echo '</div>';
    echo '<div class="col-md-6">';
    echo '<h3>'.$pantalon['title'].'</h3>';
    echo '<p>'.$pantalon['Product_Details'].'</p>';
    echo '<p><strong>'.$pantalon['price'].'€</strong></p>';
    echo '</div>';
    echo '</div>';
  }

   ?>
</div>
</div>
	<?php include('footer.php'); ?>

