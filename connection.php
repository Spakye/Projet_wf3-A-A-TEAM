<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<form>
	<input type="text" name="username" placeholder="Username or Email">
	<input type="text" name="password" placeholder="Password">
	<button type="submit">Log in</button>
</form>

<?php

require_once('inc/bdd.php');

$select=$bdd->prepare('SELECT * FROM users WHERE username = :username OR email=:username');
$select->bindValue(':username', htmlspecialchars($_POST['username']));
$select->bindValue(':password', htmlspecialchars($_POST['password']));

if (isset($_POST)) {
	$errors=[];
	if (empty($_POST['password'])) {
		$errors[]="Password is empty.";
	}
	if (empty($_POST['username'])) {
		$errors[]="Username is empty.";
	}

	if ($errors) {
		foreach ($errors as $error) {
			echo '<h4>'.$error.'</h4><br>';
		}
	}else{
		$dataUser=$select->execute();
		if (password_verify($_POST['password'], $dataUser['password'])) {
			$_SESSION['id']= $dataUser['id'];
			$_SESSION['username']= $dataUser['username'];
			$_SESSION['email']= $dataUser['email'];
			$_SESSION['role']= $dataUser['role'];
		}
	}
}
	

?>

</body>
</html>