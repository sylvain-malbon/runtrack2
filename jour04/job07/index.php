<?php
/*
Job 07
Faire un formulaire avec deux <input> de type text ayant comme nom “largeur” et
“hauteur” et un bouton submit.
Vous devez créer un algorithme qui affiche, à la validation du formulaire,
une maison telle que :
Si on entre les valeurs : largeur =10 et hauteur = 5 dans les champs, la
maison qui s’affiche sur la page doit ressembler à ceci :
Si on entre les valeurs largeur = 20 et hauteur = 10 dans les champs,
la maison qui s’affiche sur la page doit ressembler à ceci :
*/
?>
<form method="GET">
  <label for="largeur">Largeur :</label>
  <input name="largeur" type="text" id="largeur" /><br><br>

  <label for="hauteur">Hauteur :</label>
  <input name="hauteur" type="text" id="hauteur" /><br><br>

  <button type="submit">Afficher la maison</button>
</form>

<?php
/* quand j'essaie manuellement
if ($_GET['largeur'] == 10 && $_GET['hauteur'] == 5) {
    echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/\\" . "<br>";
    echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/__\\" . "<br>";
    echo "&nbsp;&nbsp;&nbsp;/____\\" . "<br>";
    echo "&nbsp;/______\\" . "<br>";
    echo "/_______\\" . "<br>";
    echo "|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp|" . "<br>";
    echo "|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp|" . "<br>";
    echo "|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp|" . "<br>";
    echo "|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp|" . "<br>";
    echo "|&#8202;_______&#8202;|" . "<br>";
}
if ($_GET['largeur'] == 20 && $_GET['hauteur'] == 10) {
    echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/\\" . "<br>";
    echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/__\\" . "<br>";
    echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/______\\" . "<br>";
    echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/________\\" . "<br>";
    echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/__________\\" . "<br>";
    echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/______________\\" . "<br>";
    echo "&nbsp;&nbsp;&nbsp;&nbsp;/__________________\\" . "<br>";
    echo "&nbsp;&nbsp;&nbsp;/____________________\\" . "<br>";
    echo "&nbsp;&nbsp;/______________________\\" . "<br>";
    echo "&nbsp;/________________________\\" . "<br>";
    echo "|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|" . "<br>";
    echo "|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|" . "<br>";
    echo "|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|" . "<br>";
    echo "|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|" . "<br>";
    echo "|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|" . "<br>";
    echo "|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|" . "<br>";
    echo "|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|" . "<br>";
    echo "|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|" . "<br>";
    echo "|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|" . "<br>";
    echo "|____________________|" . "<br>";
}
*/

// Corrigé 
if ($_GET['largeur'] && $_GET['hauteur']) {
    $largeur = $_GET['largeur'];
    $hauteur = $_GET['hauteur'];

    echo "<pre>"; // début du bloc monospacé

    // TOIT
    $i = 0;
    while ($i < $hauteur) {
        $espaces = $hauteur - $i;
        $j = 0;
        while ($j < $espaces) {
            echo " ";
            $j++;
        }

        echo "/";
        $k = 0;
        while ($k < $i * 2) {
            echo "_";
            $k++;
        }
        echo "\\" . "\n";
        $i++;
    }

    // MURS
    $ligne = 0;
    while ($ligne < $hauteur) {
        echo "|";
        $col = 0;
        while ($col < $largeur - 2) {
            echo " ";
            $col++;
        }
        echo "|" . "\n";
        $ligne++;
    }

    // SOL
    echo "|";
    $sol = 0;
    while ($sol < $largeur - 2) {
        echo "_";
        $sol++;
    }
    echo "|" . "\n";

    echo "</pre>"; // fin du bloc monospacé
}
?>
