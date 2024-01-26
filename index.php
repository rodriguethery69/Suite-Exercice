<?php 
require_once __DIR__ . ('/utilities/header.php'); 
require_once __DIR__ . ('/function/movies.fn.php');
require_once __DIR__ . ('/function/selectBest.fn.php');

?>
<!-- En-tête principal indiquant le titre de la section -->
<h1>Les Meilleurs Films Du Moment</h1>

<!-- Un conteneur avec une classe de style qui donne de l'espace autour de son contenu -->
<div class="p-5">
  <!-- Une colonne (col-3) pour organiser le contenu -->
  <div class="col-3">
    <!-- Formulaire qui utilise la méthode GET pour envoyer des informations à la même page -->
    <form method="GET" action="">

      <!-- Étiquette (label) pour décrire le menu déroulant -->
      <label for="nombreFilms">Nombre de films :</label>

      <!-- Menu déroulant (select) avec des options -->
      <select class="form-select" name="limit" id="nombreFilms" aria-label="Default select example" onchange="this.form.submit()">

        <!-- Première option avec la valeur 3, affichant 'Les 3 meilleurs films', et vérifiant si c'est la limite sélectionnée -->
        <?php selectBest(3, 'Les 3 meilleurs films', $limit); ?>

        <!-- Deuxième option avec la valeur 5, affichant 'Les 5 meilleurs films', et vérifiant si c'est la limite sélectionnée -->
        <?php selectBest(5, 'Les 5 meilleurs films', $limit); ?>

        <!-- Troisième option avec la valeur 10, affichant 'Les 10 meilleurs films', et vérifiant si c'est la limite sélectionnée -->
        <?php selectBest(10, 'Les 10 meilleurs films', $limit); ?>

      </select>
    </form>
  </div>
</div>


<?php

$films = findBestMovies($db, $limit);
?>

  
  <?php foreach ($films as $film) { ?>
    <div class="alert alert-primary" role="alert">
      <a href="mapage.php?id=<?= $film['id'] ?>"><?= $film['title'] ?></a>
  </div>   
  <?php } 
  require_once __DIR__ . ('/utilities/footer.php');
  ?>
</body>
</html>