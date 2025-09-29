<?php

/**
 * Job 03 – jour09
 * En utilisant PHP et mysqli, connectez-vous à la base de données “jour09”.
 * À l’aide d’une requête SQL, récupérez le prénom, le nom et la date de naissance
 * des étudiants de sexe féminin. Affichez le résultat dans un tableau HTML.
 */

// Le mode de connexion (mysqli ou PDO) est choisi dynamiquement via l'URL : ?mode=pdo ou ?mode=mysqli

$mode = isset($_GET['mode']) ? $_GET['mode'] : 'mysqli';
$femmes = [];

if ($mode === 'mysqli') {
    $mysqli = new mysqli("localhost", "root", "", "jour09");

    if ($mysqli->connect_error) {
        die("Erreur de connexion mysqli : " . $mysqli->connect_error);
    }

    $sql = "SELECT prenom, nom, naissance FROM etudiants WHERE sexe = 'femme'";
    $result = $mysqli->query($sql);

    if (!$result) {
        die("Erreur dans la requête mysqli : " . $mysqli->error);
    }

    while ($row = $result->fetch_assoc()) {
        $femmes[] = $row;
    }

    $result->free();
    $mysqli->close();
} elseif ($mode === 'pdo') {
    try {
        $pdo = new PDO("mysql:host=localhost;dbname=jour09;charset=utf8", "root", "");
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "SELECT prenom, nom, naissance FROM etudiants WHERE sexe = 'femme'";
        $stmt = $pdo->query($sql);

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $femmes[] = $row;
        }
    } catch (PDOException $e) {
        die("Erreur PDO : " . $e->getMessage());
    }
} else {
    die("Mode inconnu. Utilisez ?mode=pdo ou ?mode=mysqli dans l'URL.");
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Étudiantes – <?php echo strtoupper($mode); ?></title>
    <style>
        table {
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
            border: 1px solid black;
            padding: 8px;
        }

        thead {
            background-color: #f2f2f2;
        }

        .switch {
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
    <h1>Étudiantes (mode : <?php echo strtoupper($mode); ?>)</h1>

    <div class="switch">
        <a href="?mode=mysqli">Utiliser mysqli</a> |
        <a href="?mode=pdo">Utiliser PDO</a>
    </div>

    <table>
        <thead>
            <tr>
                <th>Prénom</th>
                <th>Nom</th>
                <th>Date de naissance</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($femmes as $etudiante): ?>
                <tr>
                    <td><?php echo htmlspecialchars($etudiante['prenom']); ?></td>
                    <td><?php echo htmlspecialchars($etudiante['nom']); ?></td>
                    <td><?php echo htmlspecialchars($etudiante['naissance']); ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>