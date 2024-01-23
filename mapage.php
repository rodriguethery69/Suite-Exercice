<?php 
    require('./header.php'); 

    $currentId = $_GET['id'];

    $sql = "SELECT 
    m.id, m.title, m.rating, m.year_released, 
    m.box_office, m.budget, m.duration, 
    d.name AS director,
    dc.name AS distributeur
    FROM `movies` AS m 
    INNER JOIN director d ON m.directorID = d.id
    INNER JOIN distribution_compagny dc ON m.distribution_company_id = dc.id
    WHERE m.id = $currentId";

    $requete = $db->query($sql);
    $film = $requete->fetch();
?>

<h1>Detail du film</h1>
  <h2><?= $film['title'] ?></h2>
  <p>année de réalisation : <?= $film['year_released'] ?></p>
  <p>par : <?= $film['director'] ?></p>
  <p>de : <?= $film['distributeur'] ?></p>
  <p>note des spéctateurs : <?= $film['rating'] ?></p>
  <p>nbr d'entrés : <?= $film['box_office'] ?></p>
  <p>durée : <?= $film['duration'] ?></p>
  <p>coût de production : <?= $film['budget'] ?></p>
</body>
</html>