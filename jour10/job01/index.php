<?php

/**
Job 01 – jour09
En utilisant PHP et mysqli, connectez-vous à la base de données “jour09”.
À l’aide d’une requête SQL, récupérez l’ensemble des informations de la table "etudiants".
Affichez le résultat dans un tableau HTML :
- La première ligne (thead) contient les noms des champs.
- Les suivantes (tbody) contiennent les données de la base.
 */

// Le mode de connexion (mysqli ou PDO) est choisi dynamiquement via l'URL : ?mode=pdo ou ?mode=mysqli

/**
 * Si j'avais défini un mot de passe pour l'utilisateur MySQL 'root',
 * j'aurais centralisé les identifiants dans un fichier config.php :
 * require __DIR__ . "/config.php";
 */

// === Définition du mode de connexion ===
// On vérifie si le paramètre 'mode' est présent dans l'URL (ex : ?mode=pdo).
// Cela évite une erreur "Undefined index" si l'utilisateur ne l'a pas fourni.
// Si le paramètre est absent, on utilise 'mysqli' comme valeur par défaut.
$mode = isset($_GET['mode']) ? $_GET['mode'] : 'mysqli';

// === Initialisation du tableau de résultats ===
// Ce tableau contiendra les données récupérées depuis la base.
$etudiants = [];

// === Connexion et requête avec mysqli ===
if ($mode === 'mysqli') {

    // Connexion à la base de données avec l'extension mysqli
    $mysqli = new mysqli("localhost", "root", "", "jour09");

    // Vérification de la connexion
    if ($mysqli->connect_error) {
        // Si la connexion échoue, on affiche un message d'erreur et on arrête le script
        die("Erreur de connexion mysqli : " . $mysqli->connect_error);
    }

    // Requête SQL pour récupérer tous les étudiants
    $sql = "SELECT * FROM etudiants";
    $result = $mysqli->query($sql);

    // Vérification du résultat de la requête
    if (!$result) {
        die("Erreur dans la requête mysqli : " . $mysqli->error);
    }

    // On parcourt les résultats et on les ajoute au tableau $etudiants
    while ($row = $result->fetch_assoc()) {
        $etudiants[] = $row;
    }

    // On libère la mémoire et on ferme la connexion
    $result->free();
    $mysqli->close();
}

// === Connexion et requête avec PDO ===
elseif ($mode === 'pdo') {

    try {
        // Connexion à la base de données avec PDO
        $pdo = new PDO("mysql:host=localhost;dbname=jour09;charset=utf8", "root", "");
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Requête SQL pour récupérer tous les étudiants
        $sql = "SELECT * FROM etudiants";
        $stmt = $pdo->query($sql);

        // On parcourt les résultats et on les ajoute au tableau $etudiants
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $etudiants[] = $row;
        }
    } catch (PDOException $e) {
        // En cas d'erreur, on affiche le message et on arrête le script
        die("Erreur PDO : " . $e->getMessage());
    }
}

// === Gestion du mode inconnu ===
// Si le paramètre 'mode' ne vaut ni 'pdo' ni 'mysqli', on affiche une erreur
else {
    die("Mode inconnu. Utilisez ?mode=pdo ou ?mode=mysqli dans l'URL.");
}
?>

<!-- === Affichage HTML des résultats === -->
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Liste des étudiants – <?php echo strtoupper($mode); ?></title>
    <style>
        /* Style du tableau HTML */
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
    <!-- Titre principal avec le mode de connexion utilisé -->
    <h1>Liste des étudiants (mode : <?php echo strtoupper($mode); ?>)</h1>

    <div class="switch">
        <!-- Liens pour changer dynamiquement le mode de connexion -->
        <a href="?mode=mysqli">Utiliser mysqli</a> |
        <a href="?mode=pdo">Utiliser PDO</a>
    </div>

    <!-- Tableau HTML contenant les résultats -->
    <table>
        <thead>
            <tr>
                <th>Prénom</th>
                <th>Nom</th>
                <th>Naissance</th>
                <th>Sexe</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            <!-- Boucle PHP pour afficher chaque étudiant -->
            <?php foreach ($etudiants as $etudiant): ?>
                <tr>
                    <!-- On utilise htmlspecialchars() pour sécuriser l'affichage -->
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