index.php
<?php
/**
INSTRUCTIONS:
Job 05
Créez une fonction nommée “occurrences($str, $char)”.
Cette fonction prend en paramètre une chaîne de caractères nommée “$str” et un
caractère nommé “$char”.
Elle doit retourner le nombre d'occurrences du caractère “$char” dans “$str”.
Exemple : si $str = “Bonjour” et $char=”o” alors le nombre d'occurrences de $char dans
$str sera : 2
*/

// on commence directement avec la fonction
function occurrences($str, $char) {
    $i = 0;        // index pour parcourir la chaîne
    $count = 0;    // compteur d'occurrences

    // boucle tant qu'on a un caractère à l'index $i à la place de $i < strlen($str)
    while (isset($str[$i])) {
        /**
        ($str[$i] === $char) : à apprendre par cœur
        on compare le caractère courant avec celui qu'on cherche
         */
        if ($str[$i] === $char) {
            $count++; // si égal, on incrémente le compteur
        }
        $i++; // on passe au caractère suivant
    }

    return $count; // on retourne le nombre total d'occurrences
}

// exemple d'utilisation
echo occurrences("Bonjour", "o"); // affiche 2
?>