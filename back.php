<?php
include('header.php');
?>
<div class="container">
	<div class="row">
		<div class="col-3">
			<h1>ajouter un article</h1>
			<form method="POST" action="back.php"><br>
				<input type="text" name="titre" placeholder="titre"><br>
				<input type="int" name="prix" placeholder="prix"><br>
				<textarea name="description" placeholder="description du produit"></textarea><br>
				<select>
					<option>Chaussure</option>
					<option>Pantalon</option>
					<option>T-shirt</option>
					<option>Robe</option>
					<option>Manteau</option>
				</select><br>
				<button type="submit">Ajouter le produit</button>
			</form>
		</div>
		<div class="col-3">
			<h1>Modifier un produit</h1>
			<select>
				
			</select>
		</div>
		<div class="col-3">
			<h1>Supprimer un produit</h1>
			<select>
				
			</select>
		</div>
	</div>
</div>

<?php
include('footer.php');
?>