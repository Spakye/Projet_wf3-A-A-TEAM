<<<<<<< HEAD
<?php
include('headerBack.php');
 ?>

</body>
</html>
=======

	<?php include('header.php'); ?>

<?php
require_once('inc/bdd.php');
?>

<h1>Ajout d'Article</h1>
<div class="container">

	<form>
  <div class="form-group">
    <label>Titre de l'article</label>
    <input type="text" class="form-control" placeholder="Ajouter votre article">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

</div>

	<?php include('footer.php'); ?>
>>>>>>> 4a0548f83dd28903a0d4b0aece1b9a38bc3b12f4
