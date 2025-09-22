<?php
/*
Job 05
Faire un formulaire de connexion de type POST (se demander, pourquoi pas GET ?)
ayant deux champs <input> nommés username et password.
Après validation du formulaire :
● si le username est “John” ET le password est “Rambo” afficher :
“C’est pas ma guerre”
● sinon afficher : “Votre pire cauchemar”.
*/
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Job 05 - Connexion</title>
</head>
<body>

  <h2>Connexion</h2>
  <form method="post" action="index.php">
    <label for="username">Nom d'utilisateur :</label>
    <input type="text" id="username" name="username"><br><br>

    <label for="password">Mot de passe :</label>
    <input type="password" id="password" name="password"><br><br>

    <input type="submit" value="Se connecter">
  </form>

  <?php
  if ($_POST != []) {
    $user = $_POST['username'];
    $pass = $_POST['password'];

    if ($user === "John" && $pass === "Rambo") {
      echo "<p><strong>C’est pas ma guerre</strong></p>";
    } else {
      echo "<p><strong>Votre pire cauchemar</strong></p>";
    }
  }
  ?>

</body>
</html>
