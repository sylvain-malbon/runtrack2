<?php
/*
Faire un algorithme qui affiche un rectangle de 20 de largeur par 10 de hauteur.
Ces dimensions doivent être stockées dans deux variables $largeur et $hauteur,
modifiables facilement.
*/

$largeur = 20;   // Largeur du rectangle
$hauteur = 10;   // Hauteur du rectangle

echo '<pre>';

// Boucle pour chaque ligne (hauteur)
for ($i = 0; $i < $hauteur; $i++) {

    // Boucle pour chaque colonne (largeur)
    for ($j = 0; $j < $largeur; $j++) {

        // Si on est sur la première ou la dernière ligne
        if ($i == 0 || $i == $hauteur - 1) {

            // Si on est sur le premier ou le dernier caractère de la ligne
            if ($j == 0 || $j == $largeur - 1) {
                echo "|"; // Affiche les coins du rectangle
            } else {
                echo "-"; // Affiche le bord supérieur ou inférieur
            }

        } else { // Si on est sur une ligne du milieu

            // Si on est sur la première ou la dernière colonne
            if ($j == 0 || $j == $largeur - 1) {
                echo "|"; // Affiche les bords verticaux
            } else {
                echo " "; // Affiche l’espace vide à l’intérieur du rectangle
            }
        }
    }

    // Après chaque ligne, on passe à la ligne suivante
    echo "\n";
}

echo '</pre>';
?>