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
  echo'<div class= py-3"></div>';
  require_once __DIR__ . ('/utilities/card.php');
  echo'<div class= py-3"></div>';
  require_once __DIR__ . ('/utilities/footer.php');

if(isset($_GET['ID']) || empty($film['id'])) {
  header("Location: /");
} else{
  $title = '' . $film['title'];
}
 $picture = findPictureByMovie($db,$_GET['id']);
 $path = $picture['pathImg'];

