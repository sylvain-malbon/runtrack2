<?php

// === Première partie : Variables de type String ===

// Crée la variable str et lui affecte la valeur "LaPlateforme"
$str = "LaPlateforme";
// Affiche le contenu de la variable
echo $str;
echo "<br>"; // Ajoute un saut de ligne pour la lisibilité

// Crée les deux autres variables
$str2 = "Vive";
$str3 = "!";

// Affiche la phrase en concaténant les variables.
// Le point "." est l'opérateur de concaténation en PHP.
echo $str2 . " " . $str . " " . $str3;
echo "<br>";


// === Deuxième partie : Variables de type Int (nombre entier) ===

// Crée la variable val et lui affecte la valeur 6
$val = 6;
// Affiche le contenu de la variable
echo $val;
echo "<br>";

// Ajoute 4 à la variable
$val += 4; // C'est le raccourci pour $val = $val + 4;
// Affiche à nouveau le contenu
echo $val;
echo "<br>";


// === Troisième partie : Variables de type Bool (booléen) ===

// Crée la variable myBool et lui affecte la valeur true
$myBool = true;
// Affiche le contenu de la variable (PHP affichera "1" pour true)
echo $myBool;
echo "<br>";

// Affecte false à la variable
$myBool = false;
// Affiche à nouveau le contenu (PHP n'affichera rien ou "0" pour false)
echo $myBool;

?>