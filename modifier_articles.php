<?php include('header.php');

require_once('inc/bdd.php');
?>

<?php



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
        <form method="GET" action="modifier_articles.php">
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