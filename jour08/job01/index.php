<?php

/**
Job 01
Créez une variable de session nommée “nbvisites”.
À chaque fois que la page est visitée, ajoutez 1.
Affichez le contenu de cette variable.
Ajoutez un bouton nommé “reset” qui permet de réinitialiser ce compteur.
 */

// Jean-Ély nous avait montré le code la veille au tableau le soir
// Démarrage de la session
session_start();

// Si le bouton "reset" est cliqué, on remet le compteur à zéro
if (isset($_POST['reset'])) {
    $_SESSION['nbvisites'] = 0;
}

// Si la variable n'existe pas encore, on l'initialise à 1
if (!isset($_SESSION['nbvisites'])) {
    $_SESSION['nbvisites'] = 1;
} else {
    $_SESSION['nbvisites']++;
}
?>

<!-- HTML de base -->
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Compteur de visites</title>
</head>

<body>
    <h1>Nombre de visites : <?php echo $_SESSION['nbvisites']; ?></h1>

    <form method="post">
        <!-- faire attention au name pour $_POST ci-avant -->
        <button type="submit" name="reset">Réinitialiser</button>
    </form>
</body>

</html>