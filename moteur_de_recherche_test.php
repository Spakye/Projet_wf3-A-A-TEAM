    <?php include('header.php'); ?>

    <?php
    require_once('inc/bdd.php');


    if(!empty($_GET)){
        $errors = [];

        if(!isset($_GET['title']) OR empty($_GET['title'])){
            $errors['title'] = 'titre invalide';
        }

        if(!empty($_GET['price']) AND !is_numeric($_GET['price'])){
            $errors['price'] = 'Produit introuvable';
        }
        if(empty($errors)){
            $sql = 'SELECT * FROM articles WHERE title LIKE :titre ';


            if(!empty($_GET['price'])){
                $sql .= 'AND price <= :prix';
            }

            $resultat = $bdd->prepare($sql);

            $resultat->bindValue(':titre', "%" . $_GET['title'] . "%");

            if(!empty($_GET['price'])){
                $resultat->bindValue(':prix', $_GET['price']);
            }
            $resultat->execute();
            $articles = $resultat->fetchAll();

            if(count($articles) == 0){
                echo'Désolé, aucun article trouvé';
            }
            ?>
    <?php
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

     include('footer.php'); ?>