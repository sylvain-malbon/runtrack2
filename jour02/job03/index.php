<?php
/*
Afficher les nombres de 0 à 100 en mettant un retour à la ligne entre chaque nombre
(<br />).
Si le nombre est entre 0 et 20 : écrire en italique (<i>), si le nombre est compris entre 25
et 50 : souligner.
Afficher “La Plateforme_” à la place de 42.
*/

$nombre_max = 100;

for ($i = 0; $i <= $nombre_max; $i++) {

    echo '<br/>';

    if ($i <= 20) {

        echo '<i>' . $i . '</i>';

    } elseif ($i == 42) {

        echo 'La Plateforme_';

    } elseif ($i >= 25 && $i <= 50) {

        echo '<u>' . $i . '</u>';

    } else {
        echo $i;
    }
}

?>