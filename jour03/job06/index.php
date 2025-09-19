<?php
/*
Job06
Créez une variable de type string nommée $str et affectez y le texte :
“Les choses que l'on possède finissent par nous posséder."
Créez un algorithme qui parcourt et écrit cette chaine à l’envers.
Ex. : redessop suon rap tnessinif edessop no'l euq sesohc seL
*/

// Ce que je voulais faire mais vain car décrémentation également
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Job06</title>
</head>
<body>
    <h2>Ce que je voulais faire mais vain car décrémentation également</h2>
    <?php
    $str = "Les choses que l'on possède finissent par nous posséder.";
    $tab = []; // Tableau vide qui va contenir chaque caractère

    // Remplissage du tableau caractère par caractère
    $i = 0;
    while (isset($str[$i])) {
        $tab[$i] = $str[$i];
        $i++;
    }

    // Parcours du tableau en sens inverse
    $j = $i - 1;
    $reverse = "";

    while ($j >= 0) {
        $reverse .= $tab[$j]; // On ajoute chaque caractère en partant de la fin
        $j--; // On recule dans le tableau (décrémentation brute)
    }

    echo "<p>$reverse</p>";
    ?>

    <h2>Ce qui est plus simple dans ce cas</h2>
    <?php
    $str = "Les choses que l'on possède finissent par nous posséder.";
    $i = 0;
    while (isset($str[$i])) {
        $i++; // On compte les caractères
    }

    $i--; // Dernier index
    $reverse = "";

    while ($i >= 0) {
        $reverse .= $str[$i]; // On ajoute chaque caractère en partant de la fin
        $i--; // On recule dans la chaîne
    }

    echo "<p>$reverse</p>";

    echo "test : é è à ç ê ë î ï ô ö û ü";

    ?>
</body>
</html>