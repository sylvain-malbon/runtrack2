<?php

echo "<h1>Méthode 1 : L'approche 'Positive' avec 'OU' (||)</h1>";
/**
 * Méthode 1 : Vérifier si le nombre est l'un des exclus.
 * Logique : SI i est 26 OU 37 OU 88..., ALORS on l'ignore.
 */
for ($i = 0; $i <= 1337; $i++) {
    // Condition pour ignorer les nombres spécifiés.
    if ($i == 26 || $i == 37 || $i == 88 || $i == 1111) {
        // 'continue;' arrête cette itération et passe directement à la suivante.
        continue;
    }
    
    // Si la condition 'if' n'est pas remplie, on affiche le nombre.
    echo $i . "<br />";
}

echo "<hr>"; // Séparateur visuel

// -----------------------------------------------------------------------------

echo "<h1>Méthode 2 : L'approche 'Négative' avec 'ET' (&&)</h1>";
/**
 * Méthode 2 : Vérifier que le nombre n'est aucun des exclus.
 * Logique : SI i n'est pas 26 ET n'est pas 37 ET n'est pas 88..., ALORS on l'affiche.
 */
for ($i = 0; $i <= 1337; $i++) {
    // Condition pour n'afficher que les nombres valides.
    if ($i != 26 && $i != 37 && $i != 88 && $i != 1111) {
        // L'action se trouve à l'intérieur du 'if'.
        echo $i . "<br />";
    }
}

echo "<hr>"; // Séparateur visuel

// -----------------------------------------------------------------------------

echo "<h1>Méthode 3 : L'approche 'Moderne' avec un Tableau (in_array)</h1>";
/**
 * Méthode 3 : Stocker les exclus dans un tableau et vérifier l'appartenance.
 * Logique : On définit une liste d'exclus, puis on affiche le nombre
 * uniquement s'il N'EST PAS dans cette liste.
 */

// On définit la liste des nombres à exclure. C'est propre et facile à modifier.
$nombresAExclure = [26, 37, 88, 1111];

for ($i = 0; $i <= 1337; $i++) {
    // La fonction in_array() vérifie si $i se trouve dans le tableau.
    // Le '!' inverse la logique : on exécute le code si $i n'y est PAS.
    if (!in_array($i, $nombresAExclure)) {
        echo $i . "<br />";
    }
}

?>