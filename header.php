<?php 
session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
	<meta charset="utf-8">
	<title> Boutique en ligne </title>	
	<link href="https://fonts.googleapis.com/css?family=Brawler" rel="stylesheet">
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<header>
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-2">
					<a href="index.php"><img src="images/logo.jpg" alt="logo" class="logo"></a>
				</div>
				<nav class="col-md-8 navbar navbar-expand-lg d-flex justify-content-around">
					<ul class="navbar-nav">
						<li class="nav-item"><a class="nav-link" href="index.php">HOME</a></li>
						<li class="nav-item active">
							<a class="nav-link" href="chaussure.php">CHAUSSURE</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="pantalon.php">PANTALON</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="t-shirt.php">T-SHIRT</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="manteau.php">MANTEAU</a>
						</li>
						<li class="nav-item active">
							<a class="nav-link" href="contact.php">CONTACT</a>
						</li>

					</ul>				
				</nav>
				<div class="col-md-2 navbar navbar-expand-lg">
<?php

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
				</div>
			</div>
		</div>
	</header>