<?php

/**
Job 02
Créez un cookie nommé “nbvisites”. À chaque fois que la page est visitée, ajoutez 1.
Affichez le contenu du cookie.
Ajoutez un bouton nommé “reset” qui permet de réinitialiser ce compteur.
 */

// Pas besoin de session_start() ici, car on utilise uniquement des cookies

// Durée du cookie : ici 1 heure (vu au tableau hier soir)
$expiration = time() + 3600;

if (isset($_POST['reset'])) {
    // Réinitialisation du cookie à 0
    setcookie('nbvisites', 0, $expiration);
    $nbvisites = 0; // Mise à jour immédiate pour l'affichage
} else {
    // Si le cookie existe, on l'incrémente
    if (isset($_COOKIE['nbvisites'])) {
        $nbvisites = $_COOKIE['nbvisites'] + 1;
    } else {
        $nbvisites = 1;
    }
    // Mise à jour du cookie avec la nouvelle valeur
    setcookie('nbvisites', $nbvisites, $expiration);
}

// Mise à jour immédiate de $_COOKIE pour l'affichage dans la même requête
$_COOKIE['nbvisites'] = $nbvisites;
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Cookies de visites</title>
</head>

<body>
    <!-- Affichage du compteur de visites stocké dans le cookie -->
    <h1>Nombre de visites (cookie) : <?php echo $_COOKIE['nbvisites']; ?></h1>

    <!-- Formulaire pour réinitialiser le compteur -->
    <form method="POST">
        <button type="submit" name="reset">Réinitialiser</button>
    </form>
</body>

</html>