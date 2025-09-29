<?php

/**
 * Job 05 – jour09
En utilisant php, connectez-vous à la base de données “jour09”. A l’aide d’une requête
SQL, récupérez l’ensemble des informations des étudiants qui ont moins de 18 ans.
Affichez le résultat de cette requête dans un tableau html. La première ligne de votre
tableau html doit contenir le nom des champs. Les suivantes doivent contenir les
données présentes dans votre base de données.
 */

// Le mode de connexion (mysqli ou PDO) est choisi dynamiquement via l'URL : ?mode=pdo ou ?mode=mysqli

$mode = isset($_GET['mode']) ? $_GET['mode'] : 'mysqli';
$etudiants = [];

if ($mode === 'mysqli') {
    $mysqli = new mysqli("localhost", "root", "", "jour09");

    if ($mysqli->connect_error) {
        die("Erreur de connexion mysqli : " . $mysqli->connect_error);
    }

    $sql = "SELECT * FROM etudiants WHERE naissance > DATE_SUB(CURDATE(), INTERVAL 18 YEAR)";
    $result = $mysqli->query($sql);

    if (!$result) {
        die("Erreur dans la requête mysqli : " . $mysqli->error);
    }

    while ($row = $result->fetch_assoc()) {
        $etudiants[] = $row;
    }

    $result->free();
    $mysqli->close();
} elseif ($mode === 'pdo') {
    try {
        $pdo = new PDO("mysql:host=localhost;dbname=jour09;charset=utf8", "root", "");
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "SELECT * FROM etudiants WHERE naissance > DATE_SUB(CURDATE(), INTERVAL 18 YEAR)";
        $stmt = $pdo->query($sql);

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $etudiants[] = $row;
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
    <title>Étudiants de moins de 18 ans – <?php echo strtoupper($mode); ?></title>
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
    <h1>Étudiants de moins de 18 ans (mode : <?php echo strtoupper($mode); ?>)</h1>

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
                <th>Sexe</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($etudiants as $etudiant): ?>
                <tr>
                    <td><?php echo htmlspecialchars($etudiant['prenom']); ?></td>
                    <td><?php echo htmlspecialchars($etudiant['nom']); ?></td>
                    <td><?php echo htmlspecialchars($etudiant['naissance']); ?></td>
                    <td><?php echo htmlspecialchars($etudiant['sexe']); ?></td>
                    <td><?php echo htmlspecialchars($etudiant['email']); ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>