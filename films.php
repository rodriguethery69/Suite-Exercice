<?php 
require __DIR__ . ('/utilities/header.php'); 
?>

  <h1>Les films Utopia</h1>
  <?php
$films = findAllMovies($db);
  ?>
  
  <?php foreach ($films as $film) { ?>
    <p>
      <a href="mapage.php?id=<?= $film['id'] ?>"><?= $film['title'] ?></a>
    </p>
  <?php } ?>

</body>
</html>