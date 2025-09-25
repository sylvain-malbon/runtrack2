<?php

/**
Job 03
Créez un formulaire qui contient un input de type de text nommé “prenom” et un bouton
submit. Lorsque l’on valide le formulaire, le prénom est ajouté dans une variable de
session. Afficher l’ensemble des prénoms.
Ajoutez un bouton nommé “reset” qui permet de réinitialiser la liste.
 */

session_start();

// Initialisation manuelle : si la variable n'existe pas ou vaut false
if (!isset($_SESSION['prenoms']) || $_SESSION['prenoms'] == false) {
    $_SESSION['prenoms'] = [];
}

// Ajout du prénom si le formulaire est rempli et validé
if (isset($_POST['validation']) && isset($_POST['prenom'])) {
    $_SESSION['prenoms'][] = $_POST['prenom'];
}

// Réinitialisation si le bouton reset est cliqué
if (isset($_POST['reset'])) {
    $_SESSION['prenoms'] = [];
}

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Formulaire prénom</title>
</head>

<body>
    <form method="POST">
        <input type="text" name="prenom">
        <button type="submit" name="validation">Valider</button>
        <button type="submit" name="reset">Réinitialiser</button>
    </form>
    <h2>Liste des prénoms (sans nat func)</h2>
    <ul>
        <?php
        foreach ($_SESSION['prenoms'] as $prenom_brut) {
            echo "<li>$prenom_brut</li>";
        }
        ?>
    </ul>
</body>