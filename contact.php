<?php
include('header.php')
?>
<div class="contact">
    <h1 class="titre"><u>Formulaire de contact : </u>(نموذج الاتصال)</h1>
    <form class="form">
        <div class="form-group">
          <label for="exampleInputText" class="">Nom</label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Entrez votre nom">
          <small id="emailHelp" class="form-text text-muted"></small>
        </div>
        <div class="form-group">
          <label for="exampleInputText">Prénom</label>
          <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Entrez votre prénom">
        </div>        
        <div class="form-group">
            <label for="exampleInputEmail1">Adresse Email</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Entrez votre email">
            <small id="emailHelp" class="form-text text-muted"></small>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Mot de passe</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Mot de passe">
          </div> 
          <div class="form-group">
            <label for="exampleFormControlTextarea1">Votre message</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="10"></textarea>
          </div>        
        <button type="submit" class="btn btn-primary">Envoyer</button>
      </form>
</div>
      <hr>
      <h3 id="ns">Nous situer :  حدد لنا</h3> 
      <br>     
    <div id="map"></div>
    <script>
      function initMap() {
        var uluru = {lat: 31.630000, lng: -8.008889};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 15,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBFWfsdfrlRbYZRV3p4ekUlzDN2K3mJSKQ&callback=initMap">
    </script>
 <?php
include('footer.php')
?>