
	<?php include('header.php'); ?>

<div class="container text-center">
  <div class="row">
    <h1 class="text-center" style="margin-top:15px;margin-left:380px;color:red;"><u>CHAUSSURES</u></h1>
  </div>
  <?php
  require_once('inc/bdd.php');
  $requete=$bdd->query('SELECT * FROM articles WHERE type="chaussures"');
  $chaussures=$requete->fetchAll();


  foreach ($chaussures as $chaussure) {
    echo '<hr><div class="row pt-5 pb-5"><div class="col-md-6">';
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

