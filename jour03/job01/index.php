<?php
/*
Job01
Créez un tableau contenant les nombres 200, 204, 173, 98, 171, 404, 459.
Parcourez ce tableau et affichez pour chaque nombre “X est paire<br />” ou “X est
impaire<br />”, sur votre page index.php. X prenant tour à tour chacune des valeurs
comprises dans ce tableau.
Ex. : 200 est paire
204 est paire
173 est impaire
98 est paire
171 est impaire
404 est paire
459 est impaire
*/
$array = [200, 204, 173, 98, 171, 404, 459];

foreach ($array as $index => $nombre) {
     if ($nombre %2 === 0) {
    echo "$nombre est pair<br/>";
}
else {
 echo "$nombre est impair<br/>";
}
}
?>