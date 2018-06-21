<?php include('header.php');?>

<div class="contact">
    <h1 class="titre"><u>Formulaire de contact : </u></h1>
    <form class="form" action="moteur_de_recherche.php">
        <div class="form-group">
          <label for="exampleInputText" class="">Nom</label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Entrez votre nom">
          <small id="emailHelp" class="form-text text-muted"></small>
        </div>
        <div class="form-group">
          <label for="exampleInputText">Prénom</label>
          <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Entrez votre prénom">
        </div>        
        <button type="submit" class="btn btn-primary">Envoyer</button>
      </form>
</div>







<?php include('footer.php'); ?>