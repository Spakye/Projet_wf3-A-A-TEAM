<?php 
session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
	<meta charset="utf-8">
	<title>BackOffice</title>	
	<link href="https://fonts.googleapis.com/css?family=Brawler" rel="stylesheet">
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/backstyle.css">
</head>
<header class="container-fluid">
	<div class="row">
		<div class="col-md-6">
			<p>Connecté en tant que : <?= $_SESSION['username'] ?></p>
		</div>
		<div class="col-md-6 text-right">
			<a href="index.php">retour à la boutique</a>
			<a href="gestion_articles.php">Gestion des articles</a>
			<a href="gestion_utilisateurs.php">Gestion des utilisateurs</a>
			<a href="gestion_index.php">Gestion de l'index</a>
		</div>
	</div>
</header>