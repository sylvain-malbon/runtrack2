<?php
/*
Job05
Créez une variable de type string nommée $str et affectez y le texte :
“On n’est pas le meilleur quand on le croit mais quand on le sait”.
Créez un dictionnaire (tableau keys/values) nommé $dic qui a comme keys
“consonnes” et “voyelles”. Créez un algorithme qui parcourt, compte et stocke le
nombre d'occurrences de consonnes et de voyelles de $str.
Affichez ces résultats dans un tableau <table> html qui a comme <thead> “Voyelles” et
“Consonnes”.
*/

// === MON CODE ===
$str = "On n’est pas le meilleur quand on le croit mais quand on le sait";
$dic = ["voyelles" => 0, "consonnes" => 0];

$voyelles = ['a','e','i','o','u','y','A','E','I','O','U','Y'];
$consonnes = [
    'b','c','d','f','g','h','j','k','l','m','n','p','q','r','s','t','v','w','x','z',
    'B','C','D','F','G','H','J','K','L','M','N','P','Q','R','S','T','V','W','X','Z'
];

$i = 0;
while (isset($str[$i])) {
    $j = 0;
    while (isset($voyelles[$j])) {
        if ($str[$i] === $voyelles[$j]) {
            $dic["voyelles"]++;
            break;
        }
        $j++;
    }

    $k = 0;
    while (isset($consonnes[$k])) {
        if ($str[$i] === $consonnes[$k]) {
            $dic["consonnes"]++;
            break;
        }
        $k++;
    }

    $i++;
}

// === AFFICHAGE MON CODE ===
echo "<h2>Avec mon code</h2>";
echo "<table border='1'>";
echo "<thead><tr><th>Voyelles</th><th>Consonnes</th></tr></thead>";
echo "<tbody><tr><td>" . $dic["voyelles"] . "</td><td>" . $dic["consonnes"] . "</td></tr></tbody>";
echo "</table>";


// === CODE D'ENZO ===
$str = "On n’est pas le meilleur quand on le croit mais quand on le sait";
$dic_enzo = ["voyelles" => 0, "consonnes" => 0];
$voyelles_enzo = "aeiouyAEIOUY";

$i = 0;
while (isset($str[$i])) {
    $char = $str[$i];
    if (
        ($char >= "a" && $char <= "z") ||
        ($char >= "A" && $char <= "Z") ||
        $char == "é" || $char == "è" || $char == "ê" || $char == "ë" ||
        $char == "à" || $char == "â" || $char == "ä" ||
        $char == "ù" || $char == "û" || $char == "ü" ||
        $char == "ô" || $char == "ö" || $char == "î" || $char == "ï"
    ) {
        $j = 0;
        $isVoyelle = false;
        while (isset($voyelles_enzo[$j])) {
            if (strtolower($char) == strtolower($voyelles_enzo[$j])) {
                $isVoyelle = true;
            }
            $j++;
        }
        if ($isVoyelle) {
            $dic_enzo["voyelles"]++;
        } else {
            $dic_enzo["consonnes"]++;
        }
    }
    $i++;
}

// === AFFICHAGE CODE ENZO ===
echo "<h2>Avec le code d'Enzo</h2>";
echo "<table border='1'>";
echo "<thead><tr><th>Voyelles</th><th>Consonnes</th></tr></thead>";
echo "<tbody><tr><td>" . $dic_enzo["voyelles"] . "</td><td>" . $dic_enzo["consonnes"] . "</td></tr></tbody>";
echo "</table>";
?>
