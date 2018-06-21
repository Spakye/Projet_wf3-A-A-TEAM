<?php
include('headerBack.php');

require_once('inc/bdd.php');
$loadUsers=$bdd->query('SELECT * FROM users');
$users=$loadUsers->fetchAll();


if ($_POST) {
	if (isset($_POST['addUsername']) && isset($_POST['addEmail']) && isset($_POST['addPassword']) && isset($_POST['addPasswordConfirm'])) {
		$errorsAdd=[];
		if (empty($_POST['addUsername']) || empty($_POST['addEmail']) || empty($_POST['addPassword']) || empty($_POST['addPasswordConfirm'])) {
			$errorsAdd[]="Un des champs est vide !";
		}
		if (strlen($_POST['addUsername'])< 4 || strlen($_POST['addUsername'])>25) {
			$errorsAdd[]="Username trop court ou trop long (4 - 25).";
		}
		if (!filter_var($_POST['addEmail'], FILTER_VALIDATE_EMAIL)) {
    		$errorsAdd[]="L'email n'est pas valide.";
		}
		if ($_POST['addPassword'] != $_POST['addPasswordConfirm'] || strlen($_POST['addPassword']) <4 || strlen($_POST['addPassword'])>25) {
			$errorsAdd[]="Le mdp est trop court ou les deux mdp sont différents";
		}
		if (empty($errorsAdd)) {
			$requeteAddUser=$bdd->prepare('INSERT INTO users (username,email,password) VALUES (:username, :email, :password)');
			$requeteAddUser->bindValue(':username', htmlspecialchars($_POST['addUsername']));
			$requeteAddUser->bindValue(':email', htmlspecialchars($_POST['addEmail']));
			$requeteAddUser->bindValue(':password', password_hash(htmlspecialchars($_POST['addPassword']), PASSWORD_DEFAULT));
			$requeteAddUser->execute();
			$msgAddUser='L\'utilisateur '.$_POST['addUsername'].' a bien été ajouté dans la bdd !';
		}
	}



}


 ?>

<div class="container-fluid pt-5">
	<h1 class="text-center">Gestion des Utilisateurs</h1>
	<div class="container pt-5">
		<div class="row justify-content-center">
			<div class="col-md-3 border-right border-left">
				<h3>Ajouter un utilisateur</h3>
				<?php if(isset($errorsAdd) && $errorsAdd){foreach ($errorsAdd as $errorAdd) {
					echo $errorAdd.'<br>';
				}}
				if (isset($msgAddUser)) {
					echo $msgAddUser;
				}
				?>
				<form method="POST" action="gestion_utilisateurs.php">
					<input type="text" name="addUsername" placeholder="Username">
					<input type="email" name="addEmail" placeholder="Email">
					<input type="password" name="addPassword" placeholder="Password">
					<input type="password" name="addPasswordConfirm" placeholder="Confirm Password">
					<button type="Submit">Ajouter utilisateur</button>
				</form>
			</div>
			<div class="col-md-3 border-right">
				<h3>Modifier un utilisateur</h3>
				<form method="POST" action="gestion_utilisateurs.php">
					<select name="choixModifUser">
						<?php
							foreach ($users as $user) {
								echo '<option value="'.$user['id'].'">'.$user['username'].'</option>';
							}
						 ?>
					</select>
					<button type="submit">Choisir</button>
				</form>
				<?php
						if (isset($_POST['choixModifUser'])) {
							$loadUserId = $bdd->query('SELECT * FROM users WHERE id = "'.$_POST['choixModifUser'].'"');
							$loadUserId->execute();
							$theUser= $loadUserId->fetch();
							$formModif='<hr>
										<form method="POST" action="gestion_utilisateurs.php">
											<input type="text" name="modifUsername" placeholder="Username" value="'.$theUser['username'].'">
											<input type="email" name="modifEmail" placeholder="Email" value="'.$theUser['email'].'">
											<input type="password" name="mofidPassword" placeholder="Password">
											<input type="password" name="mofidPasswordConfirm" placeholder="Confirm Password">
											<button type="Submit">Modifier utilisateur</button>
										</form>';
							echo $formModif;
						}
				?>
			</div>
			<div class="col-md-3 border-right">
				<h3>Supprimer un utilisateur</h3>
				<select name="supprUser">
					<?php
						foreach ($users as $user) {
							echo '<option value="'.$user['id'].'">'.$user['username'].'</option>';
						}
					 ?>
				</select>
			</div>
		</div>
	</div>
</div>


</body>
</html>