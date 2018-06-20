
	<?php include('header.php'); ?>

<div class="container">
  <div class="row text-center">
    <h1>CHAUSSURES</h1>
  </div>
  <?php
  require_once('inc/bdd.php');
  $requete=$bdd->query('SELECT * FROM articles WHERE type="chaussures"');
  $chaussures=$requete->fetchAll();


  foreach ($chaussures as $chaussure) {
    echo '<hr><div class="row"><div class="col-md-6">';
    echo '<img src="'.$chaussure['url_pictures'].'" height="250" width="250">';
    echo '</div>';
    echo '<div class="col-md-6">';
    echo '<h3>'.$chaussure['title'].'</h3>';
    echo '<p>'.$chaussure['Product_Details'].'</p>';
    echo '<p><strong>'.$chaussure['price'].'€</strong></p>';
    echo '<a class="btn btn-primary" href="article.php?id='.$chaussure['id'].'">Voir l\'article</a>';
    echo '</div>';
    echo '</div>';
  }

   ?>
</div>
    
	<?php include('footer.php'); ?>

