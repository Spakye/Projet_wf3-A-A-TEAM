<?php
include('headerBack.php');
require_once('inc/bdd.php');
$loadslides=$bdd->query('SELECT * FROM accueil');
$slides=$loadslides->fetchAll();


if (isset($_POST)) {
	if (!empty($_POST['slide1']) && !empty($_POST['slide2']) && !empty($_POST['slide3'])) {
		$requete= $bdd->query('UPDATE accueil SET url="'.$_POST['slide1'].'" WHERE id="1";
								UPDATE accueil SET url="'.$_POST['slide2'].'" WHERE id="2";
								UPDATE accueil SET url="'.$_POST['slide3'].'" WHERE id="3";');
	}
}
 ?>
<div class="container-fluid">
	<div class="container">
		<div class="row d-flex">
			<form method="POST" action="gestion_index.php">
				<div class="col-md-3">
					<h3>Slide 1</h3>
					<input type="text" name="slide1" value="<?= $slides['0']['url'] ?>">
				</div>
				<div class="col-md-3">
					<h3>Slide 2</h3>
					<input type="text" name="slide2" value="<?= $slides['1']['url'] ?>">
				</div>
				<div class="col-md-3">
					<h3>Slide 3</h3>
					<input type="text" name="slide3" value="<?= $slides['2']['url'] ?>">
				</div>
				<button type="submit">Modifier</button>
			</form>
		</div>
	</div>
</div>




</body>
</html>