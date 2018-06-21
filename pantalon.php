
	<?php include('header.php'); ?>

<div class="container text-center">
  <div class="row text-center">
    <h1 style="margin-top:15px;margin-left:380px;color:blue;"><u>PANTALONS</u></h1>
  </div>
  <?php
  require_once('inc/bdd.php');
  $requete=$bdd->query('SELECT * FROM articles WHERE type="Jeans"');
  $pantalons=$requete->fetchAll();


  foreach ($pantalons as $pantalon) {
    echo '<hr><div class="row pt-5 pb-5"><div class="col-md-6">';
    echo '<img src="'.$pantalon['url_pictures'].'" height="250" width="250">';
    echo '</div>';
    echo '<div class="col-md-6">';
    echo '<h3>'.$pantalon['title'].'</h3>';
    echo '<p>'.$pantalon['Product_Details'].'</p>';
    echo '<p><strong>'.$pantalon['price'].'€</strong></p>';
    echo '<a class="btn btn-primary" href="article.php?id='.$pantalon['id'].'">Voir l\'article</a>';
    echo '</div>';
    echo '</div>';
  }

   ?>
</div>
</div>
	<?php include('footer.php'); ?>

