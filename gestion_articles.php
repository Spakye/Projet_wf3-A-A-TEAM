<?php include('header.php');

require_once('inc/bdd.php');




    if(!empty($_POST)){

        $titleArticle = trim(strip_tags($_POST['titleArticle']));
        $typeArticle = trim(strip_tags($_POST['typeArticle']));
        $prixArticle = trim(strip_tags($_POST['prixArticle']));
        $photoArticle = trim(strip_tags($_POST['photoArticle']));
        $descriptionArticle = trim(strip_tags($_POST['descriptionArticle']));

        $errors= [];

        if(empty($titleArticle)){
            echo 'Veuillez rentrer un titre';
        }
        if(empty($typeArticle)){
            echo 'Veuillez rentrer un type';
        }
        if(empty($prixArticle) OR !is_numeric($prixArticle)){
            echo 'Veuillez rentrer un prix';
        }
        if(empty($photoArticle)){
            echo 'Veuillez rentrer une photo';
        }
        if(empty($descriptionArticle)){
            echo 'Veuillez rentrer une description';
        }
        if(empty($errors)){
            $select = $bdd->prepare('INSERT INTO articles(Product_Details, title, url_pictures, price, type) VALUES (:descriptionVar, :titleVar, :photoVar,  :priceVar,  :typeVar)');
            $select->bindValue(':descriptionVar',$descriptionArticle);
            $select->bindValue(':titleVar',$titleArticle);
            $select->bindValue(':photoVar',$photoArticle);
            $select->bindValue(':priceVar',$prixArticle);
            $select->bindValue(':typeVar',$typeArticle);
            $select->execute();


            echo'Article ajouté avec succes';

        }else{
            echo 'Article non ajouté';
        }

    }


?>
<h1>Ajouter un article</h1>
<div class="container">
    <form method="POST" action="gestion_articles.php">
        <div class="form-group">
            <label>Titre de l'article</label>
            <input type="text" class="form-control" name="titleArticle" placeholder="Ajouter votre titre">
        </div>
        <div class="form-group">
            <label>Type de l'article</label>
            <input type="text" class="form-control" name="typeArticle" placeholder="Ajouter votre type">
        </div>
        <div class="form-group">
            <label>Prix</label>
            <input type="text" class="form-control" name="prixArticle" placeholder="Ajouter votre prix">
        </div>
        <div class="form-group">
            <label>Photo</label>
            <input type="text" class="form-control" name="photoArticle" placeholder="Ajouter votre photo">
        </div>
        <div class="form-group">
            <label>Description de l'article</label>
            <textarea class="form-control" name="descriptionArticle" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Ajouter</button>
    </form>
    </div><br>

<?php

    $result = $bdd->query('SELECT * FROM `articles` WHERE id');
    $result->execute();
    $articles1= $result->fetchAll();
?>

<h1>Supprimer un article</h1>
<div class="container">
    <form method="POST" action="gestion_articles.php">
        <div class="form-group">
            <label>Titre de l'article</label>
            <select class="form-control" id="exampleFormControlSelect1">
                <option>1</option>
            </select>
        </div>
    </form>
    <button type="submit" class="btn btn-primary">supprimer</button>
    </form>
</div>






<?php include('footer.php'); ?>
