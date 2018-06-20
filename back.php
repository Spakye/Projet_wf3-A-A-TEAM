<?php
include('header.php');
?>
<div class="container text-center">
	<h1>Produits</h1>
	<hr>
	<div class="row">
		<div class="col-3">
			<h2>ajouter un article</h2>
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
			<h2>Modifier un produit</h2>
			<select>
				
			</select>
		</div>
		<div class="col-3">
			<h2>Supprimer un produit</h2>
			<select>
				
			</select>
		</div>
	</div>
	<h1>Utilisateurs</h1>
	<hr>
	<div class="row">
		<div class="col-md3">
			<h2>Ajouter un utilisateur</h2><br>
			<form>
				<input type="text" name="username" placeholder="Nom d'utilisateur"><br>
				<input type="email" name="email" placeholder="email"><br>
				<input type="password" name="password" placeholder="password"><br>
				<input type="password" name="passwordConfirm" placeholder="Confirm password"><br>
				<button type="submit">Ajouter utilisateur</button><br>
			</form>
		</div>
		<div class="col-md-3">
			<h2>Modifier un Utilisateur</h2>
			<select>
				
			</select>
		</div>
		<div class="col-md-3">
			<h2>Supprimer un utilisateur</h2>
			<select>
				
			</select>
		</div>
	</div>
</div>

<?php
include('footer.php');
?>