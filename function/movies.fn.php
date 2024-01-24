<?php

function findAllMovies($db) { 
    $sql = "SELECT * FROM `movies`;";
    // On execute la requete la methode query
    $requete = $db->query($sql);
    $result = $requete->fetchAll();
    return $result;
}

function findMovieByID($db, $currentId){
    $sql = "SELECT 
    m.id, m.title, m.rating, m.year_released, 
    m.box_office, m.budget, m.duration, 
    d.name AS director,
    dc.name AS distributeur,
    dg.name AS genre,
    GROUP_CONCAT(l.name SEPARATOR ', ') AS languages
    FROM `movies` AS m 
    INNER JOIN director d ON m.directorID = d.id
    INNER JOIN distribution_compagny dc ON m.distribution_company_id = dc.id
    INNER JOIN genre dg ON m.genreID = dg.id
    INNER JOIN movie_language ml ON m.id = ml.movieID
    JOIN languages l ON ml.languageID = l.id
    WHERE m.id = $currentId";

    $requete = $db->query($sql);
    $film = $requete->fetch();
    return $film;

}