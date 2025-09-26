<?php

/**
Job 04
Créez un formulaire de connexion qui contient un input de type de text nommé
“prenom” et un bouton submit nommé “connexion”. Lorsque l’on valide le formulaire, le
prénom est ajouté dans un cookie. Si un utilisateur a déjà entré son prénom, n'affichez
plus le formulaire de connexion. A la place, écrivez “Bonjour prenom !” et ajouter un
bouton “Déconnexion” nommé “deco”. Lorsque l’utilisateur se déconnecte, il faut à
nouveau afficher le formulaire de connexion.
 */

/**
ESSAI: faux cookie

session_start(); // obligatoire pour utiliser $_SESSION

// Initialisation du compteur
if (!isset($_SESSION['temps'])) {
    $_SESSION['temps'] = 0;
}
$_SESSION['temps'] = $_SESSION['temps'] + 1;

// Connexion simulée
if (isset($_POST['connexion']) && isset($_POST['prenom']) && $_POST['prenom'] != '') {
    $_SESSION['prenom']   = $_POST['prenom'];
    $_SESSION['connecte'] = true;
}

// Déconnexion simulée
if (isset($_POST['deco'])) {
    $_SESSION['prenom']   = '';
    $_SESSION['connecte'] = false;
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Connexion maison</title>
</head>

<body>
    <?php
    if (isset($_SESSION['connecte']) && $_SESSION['connecte'] === true && $_SESSION['prenom'] != '') {
        echo "<p>Bonjour " . $_SESSION['prenom'] . " !</p>";
        echo "<p>Temps : " . $_SESSION['temps'] . "</p>";
        echo '<form method="POST"><button type="submit" name="deco">Déconnexion</button></form>';
    } else {
        echo '<form method="POST">
            <input type="text" name="prenom">
            <button type="submit" name="connexion">Connexion</button>
          </form>';
    }
    ?>
</body>

</html>
 */

// VRAI COOKIE, mais sans nat func sauf setcookie() ; avec sup glob et isset

session_start(); // obligatoire pour utiliser $_SESSION

// Connexion simulée
if (isset($_POST['connexion']) && isset($_POST['prenom']) && $_POST['prenom'] != '') {
    // On crée un cookie valable 1 heure
    setcookie('prenom', $_POST['prenom'], time() + 3600);
    $_COOKIE['prenom'] = $_POST['prenom']; // pour l'utiliser immédiatement
}

// Déconnexion simulée
if (isset($_POST['deco'])) {
    // On supprime le cookie en le réécrivant avec une date passée
    setcookie('prenom', '', time() - 3600);
    $_COOKIE['prenom'] = '';
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Connexion maison</title>
</head>

<body>
    <?php
    if (isset($_COOKIE['prenom']) && $_COOKIE['prenom'] != '') {
        echo "<p>Bonjour " . $_COOKIE['prenom'] . " !</p>";
        echo '<form method="POST"><button type="submit" name="deco">Déconnexion</button></form>';
    } else {
        echo '<form method="POST">
            <input type="text" name="prenom">
            <button type="submit" name="connexion">Connexion</button>
          </form>';
    }
    ?>
</body>

</html>