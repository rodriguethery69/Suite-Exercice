<?php require('./header.php'); ?>
  <h1>Les films Utopia</h1>
  <?php
    $sql = "SELECT * FROM `movies`;";
    $requete = $db->query($sql);
    $films = $requete->fetchAll();
  ?>
  <?php foreach ($films as $film) { ?>
    <p>
      <a href="mapage.php?id=<?= $film['id'] ?>"><?= $film['title'] ?></a>
    </p>
  <?php } ?>

</body>
</html>