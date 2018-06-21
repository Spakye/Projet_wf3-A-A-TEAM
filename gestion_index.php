<?php
include('headerBack.php');
require_once('inc/bdd.php');
$loadslides=$bdd->query('SELECT * FROM accueil');
$slides=$loadslides->fetchAll();
 ?>
<div class="container-fluid">
	<div class="container">
		<form method="POST" action="gestion_index.php">
			<div class="col-md-3">
				<h3>Slide 1</h3>
				<input type="text" name="slide1" value="<?= $slides['1']['url'] ?>">
			</div>
			<div class="col-md-3">
				<h3>Slide 2</h3>
				<input type="text" name="slide2" value="<?= $slides['2']['url'] ?>">
			</div>
			<div class="col-md-3">
				<h3>Slide 3</h3>
				<input type="text" name="slide3" value="<?= $slides['3']['url'] ?>">
			</div>
		</form>
	</div>
</div>




</body>
</html>