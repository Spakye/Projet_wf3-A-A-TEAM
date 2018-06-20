
	<?php include('header.php');


  if (!empty($_GET)) {
    require_once('inc/bdd.php');
    $selectArticle=$bdd->prepare('SELECT * FROM articles WHERE id=:id');
    $selectArticle->bindValue(':id', $_GET['id']);
    $selectArticle->execute();
    $dataArticle=$selectArticle->fetch();
  }

   ?>

<div class="container pt-5 pb-5">
<div class="row">
  <div class="col-md-6">
    <h3><?= $dataArticle['title'] ?></h3>
  </div>

  </div>
  <div class="row">
    <div class="col-md-12">
      <p><?= $dataArticle['Product_Details'] ?></p>
    </div>
  </div>
  <div class="row">
    <div class="col-md-8">
      <img src="<?= $dataArticle['url_pictures'] ?>">
    </div>
    <div class="col-md-4">
    <h5>Taille</h5><select>
    	<option>XXL</option>
    	<option>XL</option>
    	<option>L</option>
    	<option>M</option>
    	<option>S</option>
    </select><br>
     <h5>Couleur</h5><select>
    	<option>Noir</option>
    	<option>Bleu</option>
    	<option>Rouge</option>
    	<option>Vert</option>
    	<option>Rose</option>
    </select>
     <h5>Quantité</h5><select>
    	<option>1</option>
    	<option>2</option>
    	<option>3</option>
    	<option>4</option>
    	<option>5</option>
    </select>
    <h5>Prix : <strong><?= $dataArticle['price'] ?>€</strong></h5>
    
    </div>
  </div>
</div>

	<?php include('footer.php'); ?>

