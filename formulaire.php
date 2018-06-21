<?php include('header.php');?>

<div class="contact">
    <h1 class="titre"><u>Formulaire de contact : </u></h1>
    <form class="form" method="GET" action="moteur_de_recherche_test.php">
        <div class="form-group">
          <label>Nom</label>
          <input type="text" class="form-control"  name="title" placeholder="Chercher votre produit">

        </div>
        <div class="form-group">
          <label>Prénom</label>
          <input type="text" class="form-control" name="price" placeholder="Ajouter un prix">
        </div>        
        <button type="submit" class="btn btn-primary">Envoyer</button>
      </form>
</div>







<?php include('footer.php'); ?>