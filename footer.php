<hr>
<!-- Footer -->
<footer class="page-footer font-small stylish-color-dark mt-1 container-fluid">

  <!-- Footer Links -->
  <div class="text-center text-md-left">

    <!-- Grid row -->
    <div class="row d-flex justify-content-between">

      <!-- Grid column -->
      <div class="col-md-3 mx-auto">

        <!-- Content -->
        <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Notre Boutique Ateam</h5>
        <p>Nous somme la meilleures boutique en ligne, on a tout aux meilleures prix from Marrakech, avec notre expert de la négo Mister Momo.</p>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none">

      <!-- Grid column -->
      <div class="col-md-3 mx-auto">

        <!-- Links -->
        <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Liens</h5>

        <ul class="list-unstyled">
          <li>
            <a href="chaussure.php">Chaussure</a>
          </li>
          <li>
            <a href="pantalon.php">Pantalon</a>
          </li>
          <li>
            <a href="t-shirt.php">T-Shirt</a>
          </li>
           <li>
            <a href="manteau.php">Manteau</a>
          </li>
        </ul>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none">

      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none">

      <!-- Grid column -->
      <div class="col-md-3 mx-auto">

        <!-- Links -->
        <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Admin</h5>

        <ul class="list-unstyled">
          <?php 
          if ($_SESSION) {
            echo '<li><a href="back.php">Accueil du back office</a></li>';
            echo '<li><a href="gestion_articles.php">Gestion des articles</a></li>';
            echo '<li><a href="gestion_utilisateurs.php">Gestion des utilisateurs</a></li>';
            echo '<li><a href="gestion_index.php">Gestion de la page d\'accueil</a></li>';
            echo '<li><a href="disconnect.php">Déconnexion</a></li>';
          }else{
            echo '<li><a href="connection.php">Connexion</a></li>';
          }

          ?>
        </ul>

      </div>
      <!-- Grid column -->
      <div class="col-md-3">
        <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Réseaux Sociaux :</h5>
        <ul class="list-unstyled">
    <li>
      <a class="btn-fb mx-1" href="https://www.facebook.com/ced.arnaudet">
        <i class="fab fa-facebook-square"></i>
      </a>
    </li>
    <li>
      <a class="btn-tw mx-1" href="https://twitter.com/?lang=fr">
        <i class="fab fa-twitter"></i>
      </a>
    </li>
    <li>
      <a class="btn-gplus mx-1" href="https://plus.google.com/discover">
        <i class="fab fa-google-plus-g"></i>
      </a>
    </li>
    <li>
      <a class="btn-li mx-1"  href="https://www.linkedin.com/feed/">
        <i class="fab fa-linkedin"></i>
      </a>
    </li>   
  </ul>
      </div>

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->


  <!-- Social buttons -->
  <!-- Social buttons -->


</footer>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
<script type="text/javascript" src="js/script.js"></script>

</body>
</html>