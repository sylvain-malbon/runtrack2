<?php
/*
Faire un algorithme qui affiche les nombres premiers jusqu’à 1000 en mettant un retour
à la ligne entre chaque nombre (“<br />”).
*/

// Boucle principale : on teste tous les nombres de 2 à 1000
for ($n = 2; $n <= 1000; $n++) {

    // On suppose que le nombre est premier
    $estPremier = true;

    // On cherche un diviseur entre 2 et n-1
    for ($i = 2; $i < $n; $i++) {

        // Si $n est divisible par $i, alors ce n'est pas un nombre premier
        if ($n % $i == 0) {
            $estPremier = false; // On marque qu'il n'est pas premier
            break; // Inutile de continuer à tester, on a trouvé un diviseur
        }
    }

    // Si aucun diviseur n'a été trouvé, on affiche le nombre
    if ($estPremier) {
        echo $n . '<br />'; // Affichage avec retour à la ligne HTML
    }
}
?>