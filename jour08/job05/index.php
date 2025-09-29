<?php

/**
Job 05
Développez le fameux jeu du morpion. Faites un tableau html avec 3 lignes et 3
colonnes représentant la grille. Au début de la partie, chacune des cases contient un
bouton de type submit dont la valeur est “-”. Si un joueur clique sur ce bouton, le bouton
est remplacé par un “O” ou par un “X”. C’est le joueur “X” qui commence.
Dès qu’un joueur a gagné, affichez “X a gagné” ou “O a gagné” et réinitialisez la partie. Si
toutes les cases ont été cliquées et que personne n’a gagné, affichez “Match nul” et
réinitialisez la partie. Un bouton “réinitialiser la partie” présent en dessous de la grille
permet également de réinitialiser la partie à tout moment.
 */
session_start(); // comme d'habitude

// initialisation grille et joueur (au premier chargement)
if (!isset($_SESSION['grid'])) {
    $_SESSION['grid'] = [
        ['-', '-', '-'],
        ['-', '-', '-'],
        ['-', '-', '-']
    ];
    $_SESSION['player'] = 'X'; // X commence
    $_SESSION['turns'] = 0; // compteur de coups joués
}

// réinitialisation manuelle via bouton
if (isset($_POST['reset'])) {
    session_destroy(); // on efface tout
    header("Location: " . $_SERVER['PHP_SELF']); // on recharge la page
    exit;
}

// traitement du clic sur une cellule
foreach ($_POST as $key => $value) {
    if (preg_match('/cell_(\d)(\d)/', $key, $m)) {
        $row = $m[1];
        $col = $m[2];
        // si la case est vide, on joue
        if ($_SESSION['grid'][$row][$col] === '-') {
            $_SESSION['grid'][$row][$col] = $_SESSION['player'];
            $_SESSION['turns']++;

            // vérification victoire
            $g = $_SESSION['grid'];
            $p = $_SESSION['player'];
            if (
                // lignes
                ($g[0][0] === $p && $g[0][1] === $p && $g[0][2] === $p) ||
                ($g[1][0] === $p && $g[1][1] === $p && $g[1][2] === $p) ||
                ($g[2][0] === $p && $g[2][1] === $p && $g[2][2] === $p) ||
                // colonnes
                ($g[0][0] === $p && $g[1][0] === $p && $g[2][0] === $p) ||
                ($g[0][1] === $p && $g[1][1] === $p && $g[2][1] === $p) ||
                ($g[0][2] === $p && $g[1][2] === $p && $g[2][2] === $p) ||
                // diagonales
                ($g[0][0] === $p && $g[1][1] === $p && $g[2][2] === $p) ||
                ($g[0][2] === $p && $g[1][1] === $p && $g[2][0] === $p)
            ) {
                echo "<h2>$p a gagné</h2>";
                session_destroy();
                echo "<meta http-equiv='refresh' content='2'>";
                exit;
            }

            // match nul après 9 tours
            if ($_SESSION['turns'] === 9) {
                echo "<h2>Match nul</h2>";
                session_destroy();
                echo "<meta http-equiv='refresh' content='2'>";
                exit;
            }

            // changement de joueur
            $_SESSION['player'] = ($p === 'X') ? 'O' : 'X';
        }
    }
}

// ébauche de structure HTML à la main pour la retenir par coeur
// style ajouté dans head pour alléger <table>
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta chatref="UTF-8">
    <title>Jeu du morpion</title>
    <style>
        table {
            border-collapse: collapse;
            margin-bottom: 10px;
        }

        td {
            width: 60px;
            height: 60px;
            text-align: center;
            border: 1px solid black;
        }

        input[type=submit] {
            width: 100%;
            height: 100%;
            font-size: 24px;
        }
    </style>
</head>

<body>
    <h1>Jeu du morpion</h1>
    <form method="POST">
        <table border="1" width="300" height="200">
            <!-- chaque cellule affiche soit un bouton "-", soit X ou O -->
            <tr>
                <td><?php echo ($_SESSION['grid'][0][0] === '-') ? "<input type='submit' name='cell_00' value='-'>" : $_SESSION['grid'][0][0]; ?></td>
                <td><?php echo ($_SESSION['grid'][0][1] === '-') ? "<input type='submit' name='cell_01' value='-'>" : $_SESSION['grid'][0][1]; ?></td>
                <td><?php echo ($_SESSION['grid'][0][2] === '-') ? "<input type='submit' name='cell_02' value='-'>" : $_SESSION['grid'][0][2]; ?></td>
            </tr>
            <tr>
                <td><?php echo ($_SESSION['grid'][1][0] === '-') ? "<input type='submit' name='cell_10' value='-'>" : $_SESSION['grid'][1][0]; ?></td>
                <td><?php echo ($_SESSION['grid'][1][1] === '-') ? "<input type='submit' name='cell_11' value='-'>" : $_SESSION['grid'][1][1]; ?></td>
                <td><?php echo ($_SESSION['grid'][1][2] === '-') ? "<input type='submit' name='cell_12' value='-'>" : $_SESSION['grid'][1][2]; ?></td>
            </tr>
            <tr>
                <td><?php echo ($_SESSION['grid'][2][0] === '-') ? "<input type='submit' name='cell_20' value='-'>" : $_SESSION['grid'][2][0]; ?></td>
                <td><?php echo ($_SESSION['grid'][2][1] === '-') ? "<input type='submit' name='cell_21' value='-'>" : $_SESSION['grid'][2][1]; ?></td>
                <td><?php echo ($_SESSION['grid'][2][2] === '-') ? "<input type='submit' name='cell_22' value='-'>" : $_SESSION['grid'][2][2]; ?></td>
            </tr>
        </table>
        <!-- bouton pour recommencer la partie à tout moment -->
        <input type="submit" name="reset" value="Réinitialiser la partie">
    </form>
</body>

</html>