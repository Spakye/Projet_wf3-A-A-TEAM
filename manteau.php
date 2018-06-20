
  <?php include('header.php'); ?>

<div class="container text-center">
  <div class="row text-center">
    <h1>T-SHIRT</h1>
  </div>
  <?php
  require_once('inc/bdd.php');
  $requete=$bdd->query('SELECT * FROM articles WHERE type="Veste"');
  $vestes=$requete->fetchAll();


  foreach ($vestes as $veste) {
    echo '<hr><div class="row pt-5 pb-5"><div class="col-md-6">';
    echo '<img src="'.$veste['url_pictures'].'" height="250" width="250">';
    echo '</div>';
    echo '<div class="col-md-6">';
    echo '<h3>'.$veste['title'].'</h3>';
    echo '<p>'.$veste['Product_Details'].'</p>';
    echo '<p><strong>'.$veste['price'].'€</strong></p>';
    echo '<a class="btn btn-primary" href="article.php?id='.$veste['id'].'">Voir l\'article</a>';
    echo '</div>';
    echo '</div>';
  }

   ?>
</div>
</div>
  <?php include('footer.php'); ?>

