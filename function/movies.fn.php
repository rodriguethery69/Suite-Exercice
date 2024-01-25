<?php

// Fonction pour récupérer tous les films de la base de données
function findAllMovies($db) { 
    // Requête SQL pour sélectionner tous les champs de la table 'movies'
    $sql = "SELECT * FROM `movies`;";

    // Exécute la requête sur la base de données
    $requete = $db->query($sql);

    // Récupère tous les résultats de la requête
    $result = $requete->fetchAll();

    // Retourne le résultat
    return $result;
}

function findMovieByID($db, $currentId){

     // Requête SQL pour sélectionner des informations spécifiques sur un film par ID
    $sql = "SELECT 
    m.id, m.title, m.rating, m.year_released, 
    m.box_office, m.budget, m.duration, 
    d.name AS director,
    dc.name AS distributeur,
    g.name AS genre,
    GROUP_CONCAT(l.name SEPARATOR ', ') AS languages
    FROM `movies` AS m 
    INNER JOIN director d ON m.directorID = d.id
    INNER JOIN distribution_compagny dc ON m.distribution_company_id = dc.id
    INNER JOIN genre g ON m.genreID = g.id
    INNER JOIN movie_language ml ON m.id = ml.movieID
    JOIN languages l ON ml.languageID = l.id
    WHERE m.id = $currentId";

// Exécute la requête sur la base de données
    $requete = $db->query($sql);

    // Récupère le premier résultat de la requête
    $film = $requete->fetch();

    // Retourne les informations du film
    return $film;

}

function findPictureByMovie($db, $currentId){

      // Requête SQL pour récupérer les images associées à un film par ID
    $sql = "SELECT * FROM `picture` WHERE movieId =$currentId";

// Exécute la requête sur la base de données
    $requete = $db->query($sql);

    // Récupère la première image associée au film
    $picture = $requete->fetch();

    // Retourne l'image
    return $picture;
}

