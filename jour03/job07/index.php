<?php
/*
Job07
Créez une variable de type string nommée $str et affectez-y le texte :
“Certaines choses changent, et d'autres ne changeront jamais.”
Créer un algorithme qui parcourt cette string en remplaçant le premier caractère par le
deuxième, le deuxième par le troisième, etc., et le dernier par le premier.
Ex. : Ertaines choses changent, et d'autres ne changeront jamais.c
*/

$str = "Certaines choses changent, et d'autres ne changeront jamais.";
$i = 0;
$newStr = ""; // Je ne l'avais pas pensé tout de suite...

while (isset($str[$i + 1])) { // J'avais mis $i + 1 ailleurs, pas au bon endroit...
    $newStr .= $str[$i + 1]; // Concaténation
    $i++;
}

// J’avais bien $str[0], mais je ne savais pas comment le recaser à la fin...
$newStr .= $str[0]; // On boucle le dernier caractère avec le premier

// Et voilà le résultat final
echo $newStr;
?>
