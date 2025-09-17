<?php
/*
Afficher les nombres de 1 à 100 avec un retour à la ligne (<br />).
- Si le nombre est un multiple de 3 : afficher "Fizz"
- Si le nombre est un multiple de 5 : afficher "Buzz"
- Si le nombre est un multiple de 3 et de 5 : afficher "FizzBuzz"
*/

$nombre_max = 100;

for ($i = 1; $i <= $nombre_max; $i++) {
    if ($i % 3 === 0 && $i % 5 === 0) { // en premier
        echo 'FizzBuzz';
    } elseif ($i % 3 === 0) { // en second
        echo 'Fizz';
    } elseif ($i % 5 === 0) { // en 3e
        echo 'Buzz';
    } else {
        echo $i;
    }

    echo '<br />';
}
?>
