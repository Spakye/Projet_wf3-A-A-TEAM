<?php

require_once('inc/bdd.php');
include('header.php'); ?>
<br>
<?php

$resultat= $bdd->query('SELECT * FROM articles');
$resultat->execute();
$articles = $resultat->fetchAll();

?>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <form>
                <div class="form-group">
                    <input type="search" class="form-control mr-sm-2" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Rechercher un produit...">
                </div>
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </div><br>
    <?php
    foreach($articles as $article){

    echo '<hr><div class="row"><div class="col-md-4">';
    echo '<img src="'.$article['url_pictures'].'" height="250" width="250">';
    echo '</div>';
    echo '<div class="col-md-4">';
    echo '<h3>'.$article['title'].'</h3>';
    echo '<p>'.$article['Product_Details'].'</p>';
    echo '<p><strong>'.$article['price'].'€</strong></p>';
    echo '<a class="btn btn-primary" href="article.php?id='.$article['id'].'">Voir l\'article</a>';
    echo '</div>';
    echo '</div>';
    ?>

<?php
}
?>
</div>
</div>

	<?php include('footer.php'); ?>

