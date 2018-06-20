

<body>
    <h1 class="titre">Formulaire de contact</h1>
    <form class="form">
        <div class="form-group">
          <label for="exampleInputEmail1" class="">Nom</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Entrez votre nom">
          <small id="emailHelp" class="form-text text-muted"></small>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Prénom</label>
          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Entrez votre prénom">
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
      <h3>Nous situer</h3>
    <div id="map"></div>
    <script>     
            function initMap() {
        var uluru = {lat: 44.3333, lng: 1.2167};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 10,
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