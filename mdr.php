<?php

require_once('inc/bdd.php');
include('header.php'); ?>
    <br>

    <div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <form method="POST" action="mdr.php">
                <div class="form-group">
                    <input type="text" class="form-control mr-sm-2"
                            name="title" placeholder="Rechercher un produit...">
                </div>
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </div>
    <br>
<?php

if (!empty($_POST)) {
    $errors = [];

    if (empty($_POST['title'])) {
        $errors['title'] = 'Vous devez remplir le formulaire';
    }

    if (empty($errors)) {
//l'utilisateur a bien envoyé une recherche
        $search = $bdd->prepare('SELECT * FROM articles WHERE title LIKE :titlevar ');
        $search->bindValue(':titlevar', "%" . $_POST['title'] . "%");
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
        echo 'blabla';
    }
}