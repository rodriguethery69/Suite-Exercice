<?php 
    require __DIR__ . ('/utilities/header.php');
    
?>

<h1>Detail du film</h1>
  <h2><?= $film['title'] ?></h2>
  <p>année de réalisation : <?= $film['year_released'] ?></p>
  <p>par : <?= $film['director'] ?></p>
  <p>de : <?= $film['distributeur'] ?></p>
  <p>style : <?= $film['genre'] ?></p>
  <p>languages : <?= $film['languages'] ?></p>
  <p>note des spéctateurs : <?= $film['rating'] ?></p>
  <p>nbr d'entrés : <?= $film['box_office'] ?></p>
  <p>durée : <?= $film['duration'] ?></p>
  <p>coût de production : <?= $film['budget'] ?></p>
</body>
</html>