<?php
/**
Job 07
Créez un formulaire <form> qui contient :
● un champ <input> nommé “str” de type “text”,
● une liste déroulante <select> nommée “fonction”
● un bouton <button> submit.
Lorsque vous validez le formulaire, vous devez appliquer des transformations à “str” en
fonction de l’option <option> choisie dans la liste déroulante.
Les choix possibles sont :
● “gras” : une fonction qui prend en paramètre “str” : gras($str). Elle écrit “str” en
mettant en gras (<b>) les mots commençant par une lettre majuscule.
● “cesar” : une fonction qui prend en paramètre “$str” et un nombre “$decalage”
(qui vaut 2 par défaut) : cesar($str, $decalage). $str doit s’afficher en décalant
chaque caractère d’un nombre égal à “$decalage”.
ex : Si $decalage vaut 1 alors “e” devient “f”. Si décalage vaut 3 alors “z” devient
“c”.
● “plateforme”, une fonction qui prend en paramètre “$str” : plateforme($str).
Elle affiche “$str” en ajoutant un “_” aux mots finissant par “me”.
*/
?>
<form method="post"> <!-- attention de bien séparer form et input -->
<input name="str" type="text"> <!-- ne pas fermer ; important de nommer str pour la var string $str -->
<select name="fonction"> <!-- important de nommer fonction pour comprendre -->
<option value="gras">gras</option> <!-- option gras énoncée -->
<option value="cesar">cesar</option> <!-- option cesar énoncée -->
<option value="plateforme">plateforme</option> <!-- option plateforme énoncée -->
</select> <!-- fermer -->
<button type="submit">Valider</button> <!-- fermer -->
</form> <!-- fermer -->
<?php

/**
FONCTION GRAS
*/
function gras($str) {
    $i = 0; // index pour parcourir la chaîne
    $mot = ""; // mot en cours
    $resultat = ""; // chaîne finale

    while (isset($str[$i])) {
        $c = $str[$i];

        // si on est sur une lettre ou un chiffre, on construit le mot
        if (($c >= 'A' && $c <= 'Z') || ($c >= 'a' && $c <= 'z') || ($c >= '0' && $c <= '9')) {
            $mot = $mot . $c;
        } else {
            // fin de mot : on vérifie si le mot commence par une majuscule
            if (isset($mot[0]) && $mot[0] >= 'A' && $mot[0] <= 'Z') {
                $resultat = $resultat . "<b>" . $mot . "</b>";
            } else {
                $resultat = $resultat . $mot;
            }

            $resultat = $resultat . $c; // on ajoute le séparateur (espace, ponctuation…)
            $mot = ""; // on réinitialise le mot
        }

        $i++;
    }

    // dernier mot (si la chaîne ne finit pas par un séparateur)
    if ($mot != "") {
        if ($mot[0] >= 'A' && $mot[0] <= 'Z') {
            $resultat = $resultat . "<b>" . $mot . "</b>";
        } else {
            $resultat = $resultat . $mot;
        }
    }

    return $resultat;
}

/**
FONCTION CESAR
*/
function cesar($str, $decalage = 2) {
    $alphabet = "abcdefghijklmnopqrstuvwxyz"; // les alphabets en var string
    $ALPHABET = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $i = 0;
    $resultat = "";

    while (isset($str[$i])) {
        $c = $str[$i]; // caractère courant
        $j = 0;
        $trouve = false;

        // minuscule
        while (isset($alphabet[$j])) {
            if ($c == $alphabet[$j]) {
                $nouvellePosition = ($j + $decalage) % 26;
                $resultat = $resultat . $alphabet[$nouvellePosition];
                $trouve = true;
            }
            $j++;
        }

        // majuscule
        $j = 0;
        while (!$trouve && isset($ALPHABET[$j])) {
            if ($c == $ALPHABET[$j]) {
                $nouvellePosition = ($j + $decalage) % 26;
                $resultat = $resultat . $ALPHABET[$nouvellePosition];
                $trouve = true;
            }
            $j++;
        }

        // caractère non alphabétique
        if (!$trouve) {
            $resultat = $resultat . $c;
        }

        $i++;
    }

    return $resultat;
}

/**
FONCTION PLATEFORME
 */
function plateforme($str) {
    $i = 0; // index pour parcourir la chaîne
    $mot = ""; // mot en cours
    $resultat = ""; // chaîne finale

    while (isset($str[$i])) {
        $c = $str[$i];

        // si c'est une lettre ou chiffre, on construit le mot
        if (($c >= 'A' && $c <= 'Z') || ($c >= 'a' && $c <= 'z') || ($c >= '0' && $c <= '9')) {
            $mot = $mot . $c;
        } else {
            // fin de mot : on vérifie s'il finit par "me"
            $longueur = 0;
            while (isset($mot[$longueur])) {
                $longueur++;
            }

            if ($longueur >= 2 && $mot[$longueur - 2] == 'm' && $mot[$longueur - 1] == 'e') {
                $mot = $mot . "_";
            }

            $resultat = $resultat . $mot . $c;
            $mot = ""; // on réinitialise le mot
        }

        $i++;
    }

    // dernier mot (si la chaîne ne finit pas par un séparateur)
    if ($mot != "") {
        $longueur = 0;
        while (isset($mot[$longueur])) {
            $longueur++;
        }

        if ($longueur >= 2 && $mot[$longueur - 2] == 'm' && $mot[$longueur - 1] == 'e') {
            $mot = $mot . "_";
        }

        $resultat = $resultat . $mot;
    }

    return $resultat;
}

// traitement du formulaire
if (isset($_POST['str']) && isset($_POST['fonction'])) {
    $str = $_POST['str']; // texte saisi
    $fonction = $_POST['fonction']; // transformation choisie

    if ($fonction == "gras") {
        echo "<p>Résultat : " . gras($str) . "</p>";
    } elseif ($fonction == "cesar") {
        echo "<p>Résultat : " . cesar($str) . "</p>"; // décalage par défaut = 2
    } elseif ($fonction == "plateforme") {
        echo "<p>Résultat : " . plateforme($str) . "</p>";
    }
}
?>
