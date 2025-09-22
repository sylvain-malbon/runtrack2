<?php
/*
Job 05
Créer un formulaire qui contient une liste déroulante nommée “style” et un bouton
submit. La liste déroulante doit proposer au moins “style1”, “style2” et “style3. Créer 3
fichiers css nommés “style1.css”, “style2.css” et “style3.css”. Chaque style doit avoir
des effets sur le design du formulaire, la couleur de background, la police d’écriture...
Lorsque l’on valide le formulaire, le style sélectionné doit être inclus et donc le visuel
doit changer.
*/
$selectedStyle = isset($_GET['style']) ? $_GET['style'] : 'style1';
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Job 05 - Choix de style</title>
  <link rel="stylesheet" href="<?php echo $selectedStyle; ?>.css">
</head>
<body>

  <form method="GET">
    <label for="style">Choisissez un style :</label>
    <select name="style" id="style">
      <option value="style1" <?php if ($selectedStyle == 'style1') echo 'selected'; ?>>style1</option>
      <option value="style2" <?php if ($selectedStyle == 'style2') echo 'selected'; ?>>style2</option>
      <option value="style3" <?php if ($selectedStyle == 'style3') echo 'selected'; ?>>style3</option>
    </select>
    <button type="submit">Appliquer</button>
  </form>

</body>
</html>
