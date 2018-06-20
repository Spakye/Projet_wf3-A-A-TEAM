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
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<header>
		<div class="container">
			<div class="row">
				<div class="col-md-2">
					<img src="https://placehold.it/150x50" alt="logo" class="logo">
				</div>
				<nav class="navbar navbar-expand-lg navbar-light bg-light">
				<div class="col-md-8" id="navbarNav">
					<ul class="navbar-nav">
						<li class="nav-item active">
							<a class="nav-link" href="#">CHAUSSURE</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">PANTALON</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">T-SHIRT</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">ROBE</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">MANTEAU</a>
						</li>
					</ul>
				</div>
				</nav>
				<div class="col-md-2">
					<a href="connection.php"><i class="fas fa-user fa-2x"></i></a>
					<a href="deconnection.php"><i class="fas fa-sign-out-alt fa-2x"></i></a>
				</div>
			</div>
		</div>
	</header>