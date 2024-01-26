<?php
// Fonction selectBest : génère une option pour un menu déroulant.
// Prend trois paramètres : la valeur, le texte à afficher, et la limite actuellement sélectionnée.
function selectBest($value, $text, $selectedLimit) {

    
    // Vérifie si la valeur actuelle correspond à la limite sélectionnée.
    // Si c'est le cas, ajoute l'attribut 'selected', sinon laisse la chaîne vide.
    $selected = ($selectedLimit == $value) ? 'selected' : '';

    // Affiche une balise <option> avec la valeur, le texte et l'attribut 'selected' si nécessaire.
    echo "<option value=\"$value\" $selected>$text</option>";
}

// Détermine la limite actuelle en fonction de la valeur passée dans la requête GET.
// Si aucune valeur n'est passée, utilise 3 par défaut.
$limit = isset($_GET['limit']) ? $_GET['limit'] : 3;