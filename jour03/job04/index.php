<?php
/*
Job04
Créez une variable de type string nommée $str et affectez-y le texte :
“Dans l'espace, personne ne vous entend crier”.
Créez un algorithme qui parcourt, compte et affiche le nombre de caractères présents
dans cette chaîne, sans utiliser strlen().
*/
?>

<h2>Ce que je voulais faire : afficher chaque numéro de caractère</h2>

<?php
$str = "Dans l'espace, personne ne vous entend crier";
$i = 0;

// Boucle qui parcourt la chaîne caractère par caractère
while (isset($str[$i])) {
    // Affiche le numéro du caractère (en commençant à 1)
    echo ($i + 1) . "<br>";
    $i++;
}
?>

<h2>Ce qu'il fallait faire : compter le nombre total de caractères et l'afficher à la fin</h2>

<?php
$str = "Dans l'espace, personne ne vous entend crier";
$i = 0;
$count = 0;

while (isset($str[$i])) {
    $count++;
    $i++;
}

// Affiche le nombre total de caractères
echo "Le nombre de caractères dans la chaîne est : " . $count;
?>
