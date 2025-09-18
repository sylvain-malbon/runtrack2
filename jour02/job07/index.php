<?php
/*
Faire un algorithme qui affiche un triangle de 5 de hauteur. Cette dimension devra être
stockée dans une variable $hauteur, modifiable facilement.
*/

$hauteur = 5; // Hauteur du triangle

echo '<pre>'; // Pour garder la mise en forme

// Boucle pour chaque ligne
for ($i = 1; $i <= $hauteur; $i++) {

    // Affiche les espaces (hauteur - ligne actuelle)
    for ($j = 1; $j <= $hauteur - $i; $j++) {
        echo " ";
    }

    // Affiche les étoiles (autant que la ligne actuelle)
    for ($k = 1; $k <= $i; $k++) {
        echo "*";
    }

    // Saut de ligne
    echo "\n";
}

echo '</pre>';
?>