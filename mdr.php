
	<?php include('header.php'); ?>

<?php
require_once('inc/bdd.php');
if(!empty($_GET)) {
    $errors = [];

    if(empty($_GET['title'])) {
        $errors['title'] = 'Vous devez remplir le formulaire';
    }

    if (empty($errors)) {
//l'utilisateur a bien envoyé une recherche
        $search = $bdd->prepare('SELECT * FROM articles WHERE title LIKE :titlevar ');
        $search->bindValue(':titlevar', "%" . $_GET['title'] . "%");
        $search->execute();
        $articles = $search->fetchAll();
        
        foreach ($articles as $article) {
            echo '<hr><div class="row"><div class="col-md-4">';
            echo '<img src="' . $article['url_pictures'] . '" height="250" width="250">';
            echo '</div>';
            echo '<div class="col-md-4">';
            echo '<h3>' . $article['title'] . '</h3>';
            echo '<p>' . $article['Product_Details'] . '</p>';
            echo '<p><strong>' . $article['price'] . '€</strong></p>';
            echo '<a class="btn btn-primary" href="article.php?id=' . $article['id'] . '">Voir l\'article</a>';
            echo '</div>';
            echo '</div>';

        }
    }else{
        echo 'Produit epuisé';
    }
}
?>

	<?php include('footer.php'); ?>

