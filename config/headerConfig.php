<?php

$domain = '/';  // Définit la racine du site.
$index_page = $domain;  // Page d'accueil.
$films_page = $domain . 'films.php';  // Page des films.
$contact_page = $domain . 'contact.php';  // Page de contact.
$film_page = $domain . 'mapage.php';  // Page de film individuel.

$index_name = 'les films de la semaine';  // Nom de la page d'accueil.
$films_name = 'Tous les films à l\'affiche';  // Nom de la page des films.
$contact_name = 'Contactez vous';  // Nom de la page de contact.



$current_url = $_SERVER['SCRIPT_NAME'];  // Récupère l'URL du script en cours d'exécution.


if (strpos($index_page, $current_url) !== FALSE || strpos($index_page . 'index.php', $current_url) !== FALSE):
  $title = $index_name;  // Si l'URL correspond à la page d'accueil, définir le titre comme le nom de la page d'accueil.
elseif (strpos($films_page, $current_url) !== FALSE):
  $title = $films_name;  // Si l'URL correspond à la page des films, définir le titre comme le nom de la page des films.
elseif (strpos($contact_page, $current_url) !== FALSE):
  $title = $contact_name;  // Si l'URL correspond à la page de contact, définir le titre comme le nom de la page de contact.
endif;

if (strpos($index_page, $current_url) !== FALSE || strpos($index_page . 'index.php', $current_url) !== FALSE):
  $path2 = '/assets/img/affiche.jpg';  // Si l'URL correspond à la page d'accueil, définir le chemin de l'image correspondante.
elseif (strpos($films_page, $current_url) !== FALSE):
  $path2 = '/assets/img/affiche.jpg';  // Si l'URL correspond à la page des films, définir le chemin de l'image correspondante.
elseif (strpos($contact_page, $current_url) !== FALSE):
  $path2 = '/assets/img/affiche.jpg';  // Si l'URL correspond à la page de contact, définir le chemin de l'image correspondante.
endif;

