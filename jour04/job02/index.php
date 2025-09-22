<?php
/*
Job 02
Développer un algorithme qui affiche dans un tableau HTML <table> l’ensemble des
arguments $_GET et les valeurs associées.
Il doit y avoir deux colonnes : argument et valeur.
*/
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Job 02 - Formulaire GET</title>
  <style>
    table {
      border-collapse: collapse;
      width: 50%;
      margin-top: 20px;
    }
    th, td {
      border: 1px solid #333;
      padding: 8px;
      text-align: left;
    }
    th {
      background-color: #eee;
    }
  </style>
</head>
<body>

  <h2>Formulaire</h2>
  <form method="get" action="index.php">
    <label for="prenom">Prénom :</label>
    <input type="text" id="prenom" name="prenom"><br><br>

    <label for="nom">Nom :</label>
    <input type="text" id="nom" name="nom"><br><br>

    <input type="submit" value="Envoyer">
  </form>

<h2>Résultat</h2>
<table>
  <thead>
    <tr><th>Argument</th><th>Valeur</th></tr>
  </thead>
  <tbody>
    <?php
    if ($_GET != []) {
      foreach ($_GET as $argument => $valeur) {
        if ($valeur == "") {
          echo "<tr><td>" . $argument . "</td><td>Aucune valeur</td></tr>";
        } else {
          echo "<tr><td>" . $argument . "</td><td>" . $valeur . "</td></tr>";
        }
      }
    } else {
      // Si aucun champ n'est soumis, on affiche deux lignes par défaut
      echo "<tr><td>Aucun argument</td><td>Aucune valeur</td></tr>";
      echo "<tr><td>Aucun argument</td><td>Aucune valeur</td></tr>";
    }
    ?>
  </tbody>
</table>


</body>
</html>
