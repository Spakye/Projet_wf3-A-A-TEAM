
  <?php include('header.php'); ?>

<div class="container text-center">
  <div class="row text-center">
    <h1>T-SHIRT</h1>
  </div>
  <?php
  require_once('inc/bdd.php');
  $requete=$bdd->query('SELECT * FROM articles WHERE type="tee-shirt"');
  $tshirts=$requete->fetchAll();


  foreach ($tshirts as $tshirt) {
    echo '<hr><div class="row pt-5 pb-5"><div class="col-md-6">';
    echo '<img src="'.$tshirt['url_pictures'].'" height="250" width="250">';
    echo '</div>';
    echo '<div class="col-md-6">';
    echo '<h3>'.$tshirt['title'].'</h3>';
    echo '<p>'.$tshirt['Product_Details'].'</p>';
    echo '<p><strong>'.$tshirt['price'].'€</strong></p>';
    echo '<a class="btn btn-primary" href="article.php?id='.$tshirt['id'].'">Voir l\'article</a>';
    echo '</div>';
    echo '</div>';
  }

   ?>
</div>
</div>
  <?php include('footer.php'); ?>

