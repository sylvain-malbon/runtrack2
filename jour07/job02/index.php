<?php
/**
INSTRUCTIONS:
Job 02
Créez une fonction nommée “bonjour($jour)”.
Cette fonction prend en paramètre un booléen nommé “$jour”.
● Si le paramètre “$jour” vaut true, la fonction doit afficher : “Bonjour”,
● Si le paramètre “$jour” vaut false, la fonction doit afficher : “Bonsoir”.
*/

/* 🚧 Premier essai :
function bonjour($jour) {
    echo $jour;
}
bonjour("bonjour"); // ❌ paramêtre string
*/

/* 🚧 2nd essai :
$jour = "bonjour"; // ❌ paramêtre string
function bonjour($jour) {
    return $jour;
}
echo bonjour($jour);
*/

/** Mon premier code :
$jour = true; // ✅ paramêtre booléen
function bonjour($jour) {
    if ($jour === true) {
        echo "Bonjour";
    } else {
        echo "Bonsoir";
    }
}
bonjour ($jour);
echo "<br>";
bonjour (!$jour);
*/

// Code amélioré :
function bonjour($jour) {
    if ($jour) {
        echo "Bonjour";
    } else {
        echo "Bonsoir";
    }
}
// Appel de la fonction echo "bonjour":
bonjour(true);
echo "<br>";
// Appel de la fonction echo "bonsoir":
bonjour(false);
?>