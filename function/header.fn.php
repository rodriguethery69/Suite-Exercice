<?php

// Fonction activelink : vérifie si une partie de l'URL ($url) est présente dans la page actuelle ($page).
function activelink($page, $url) {

  // Utilise strpos pour vérifier si $url est trouvé dans $page.
  // Si trouvé, cela signifie que la page actuelle correspond à $url.
  if (strpos($page, $url) !== FALSE) {
    
      // Retourne la chaîne 'active text-uppercase'.
      return 'active text-uppercase';
  }
  // Si $url n'est pas trouvé dans $page, ne retourne rien.
}
