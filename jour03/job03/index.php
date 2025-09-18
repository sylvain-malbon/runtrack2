<?php
/*
Job03
Crée une variable de type string nommée $str et affecte-lui le texte :
“I'm sorry Dave I'm afraid I can't do that”.
Crée un algorithme qui parcourt cette chaîne et affiche uniquement les voyelles.
Ex. : IoyaeIaaiIaoa
*/

$str = "I'm sorry Dave I'm afraid I can't do that";

// 🔠 Tableau des voyelles en majuscules et minuscules
$voyelles = ['a','e','i','o','u','y','A','E','I','O','U','Y'];

$i = 0;
while (isset($str[$i])) {

    // 🔁 On vérifie manuellement si $str[$i] est une voyelle
    $j = 0;
    $estVoyelle = false;
    while (isset($voyelles[$j])) {
        if ($str[$i] === $voyelles[$j]) {
            $estVoyelle = true;
        }
        $j++;
    }

    // ✅ Si c’est une voyelle, on l’affiche
    if ($estVoyelle) {
        echo $str[$i];
    }

    $i++;
}
?>
