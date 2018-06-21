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
	<link href="https://fonts.googleapis.com/css?family=Krona+One" rel="stylesheet">
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
						<li class="nav-item"><a class="nav-link" href="index.php"><strong>HOME</strong></a></li>
						<li class="nav-item active">
							<a class="nav-link" href="chaussure.php"><strong>CHAUSSURE</strong></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="pantalon.php"><strong>PANTALON</strong></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="t-shirt.php"><strong>T-SHIRT</strong></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="manteau.php"><strong>MANTEAU</strong></a>
						</li>
						<li class="nav-item active">
							<a class="nav-link" href="contact.php"><strong>CONTACT</strong></a>
						</li>

					</ul>				
				</nav>
				<div class="col-md-2 navbar navbar-expand-lg">
				<form method="GET" action="mdr.php?produits=<?php $_GET['title']?>" >
					<ul>
					<input type="text" name="title"><a href="mdr.php"><i style="color:black; margin-left:20px;" class="fas fa-search"></i></a>
					</ul>
					</form>
				</div>
			</div>
		</div>
	</header>