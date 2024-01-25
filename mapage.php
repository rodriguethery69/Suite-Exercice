<?php 
    require_once __DIR__ . ('/config/config.php');
    require_once __DIR__ . ('/function/database.fn.php');
    $db = getPDOlink($config);

    require_once __DIR__ . ('/function/movies.fn.php');
    $film = findMovieByID($db, $_GET['id']);
    $title = $film['title'];
    $picture = findPictureByMovie($db,$_GET['id']);
    $path2 = $picture['pathImg'];
    

  require_once __DIR__ . ('/utilities/header.php');

if(isset($_GET['ID']) || empty($film['id'])) {
  header("Location: /");
} else{
  $title = '' . $film['title'];
}
 $picture = findPictureByMovie($db,$_GET['id']);
 $path = $picture['pathImg'];
?>

<h1>Detail du film</h1>
<!-- <img src="<?=$path?>" alt="photo-film"> -->
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