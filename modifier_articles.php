    <?php include('header.php');

    require_once('inc/bdd.php');
    ?>

    <?php




            if (!empty($_POST)) {

                if (isset($_POST['titleArticle'])) {

                    $titleArticle = trim(strip_tags($_POST['titleArticle']));
                    $typeArticle = trim(strip_tags($_POST['typeArticle']));
                    $prixArticle = trim(strip_tags($_POST['prixArticle']));
                    $photoArticle = trim(strip_tags($_POST['photoArticle']));
                    $descriptionArticle = trim(strip_tags($_POST['descriptionArticle']));

                    $errors = [];

                    if (empty($titleArticle)) {
                        echo 'Veuillez rentrer un titre';
                    }
                    if (empty($typeArticle)) {
                        echo 'Veuillez rentrer un type';
                    }
                    if (empty($prixArticle) OR !is_numeric($prixArticle)) {
                        echo 'Veuillez rentrer un prix';
                    }
                    if (empty($photoArticle)) {
                        echo 'Veuillez rentrer une photo';
                    }
                    if (empty($descriptionArticle)) {
                        echo 'Veuillez rentrer une description';
                    }
                    if (empty($errors)) {
                        $update = $bdd->prepare('UPDATE articles SET Product_Details = :descriptionVar, title = :titleVar, url_pictures = :photoVar, price = :priceVar, type = :typeVar WHERE id = :idArticle');
                        $update->bindValue(':descriptionVar', $descriptionArticle);
                        $update->bindValue(':titleVar', $titleArticle);
                        $update->bindValue(':photoVar', $photoArticle);
                        $update->bindValue(':priceVar', $prixArticle);
                        $update->bindValue(':typeVar', $typeArticle);
                        $update->bindValue(':idArticle', $_GET['idUpdate']);
                        if ($update->execute()) {
                            echo '<p class="alert alert-success">Article modifié</p>';
                        } else {
                            echo '<p class="alert alert-danger">problème lors de l\'enregistremen</p>';
                        }

                    } else {//si le tableau $error n'est pas vide, on affiche les erreurs
                        foreach ($errors as $error) {
                            echo '<p class="alert alert-danger">' . $error . '</p>';
                        }
                    }
                }
            }

    if(!empty($_GET)) {

        if (isset($_GET['idUpdate'])) {

            $select = $bdd->query('SELECT * FROM articles WHERE id = "' . $_GET['idUpdate'] . '"');
            $articles = $select->fetch();
            $errors = [];
        }
    }

                ?>
        <h1>Ajouter un article</h1>
        <div class="container">
            <form method="POST" >
                <div class="form-group">
                    <label>Titre de l'article</label>
                    <input type="text" class="form-control" value="<?php echo $articles['title']; ?>" name="titleArticle" placeholder="Ajouter votre titre">
                </div>
                <div class="form-group">
                    <label>Type de l'article</label>
                    <input type="text" class="form-control" name="typeArticle" value="<?php echo $articles['type']; ?>" placeholder="Ajouter votre type">
                </div>
                <div class="form-group">
                    <label>Prix</label>
                    <input type="text" class="form-control" name="prixArticle" value="<?php echo $articles['price']; ?>"placeholder="Ajouter votre prix">
                </div>
                <div class="form-group">
                    <label>Photo</label>
                    <input type="text" class="form-control" name="photoArticle" value="<?php echo $articles['url_pictures']; ?>" placeholder="Ajouter votre photo">
                </div>
                <div class="form-group">
                    <label>Description de l'article</label>
                    <textarea class="form-control" name="descriptionArticle" rows="3" > <?php echo $articles['Product_Details']; ?></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Modifier</button>
            </form>
        </div><br>





















    <?php include('footer.php'); ?>
