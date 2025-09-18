<?php
/*
Job02
Créez une variable de type string nommée $str et affectez y le texte :
“Tous ces instants seront perdus dans le temps comme les larmes sous la pluie.”
Parcourir cette chaîne en affichant seulement un caractère sur deux.
Ex. : Tu e ntnssrn edsdn etmscmelslre osl li.
*/
// 📝 Déclaration de la chaîne
$str = "Tous ces instants seront perdus dans le temps comme les larmes sous la pluie.";

// 🔁 Boucle pour afficher un caractère sur deux, sans calculer la longueur
$i = 0;
while (isset($str[$i])) {
    echo $str[$i];
    $i += 2; // ⏩ On saute une lettre à chaque fois
}
?>
