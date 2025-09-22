<?php
/*
Job 03
Développez un algorithme qui affiche le nombre d’arguments $_POST.
Tips :
Pour tester votre code, créez un formulaire html <form> de type POST avec différents
champs <input> de type “text” et un <input> de type “submit” pour l’envoi.
Vous pouvez ensuite afficher avec echo directement dans votre page par exemple :
“Le nombre d’argument POST envoyé est : “
*/
?>
<form method="post" action="index.php">
  <label for="name">Pseudonyme :</label>
  <input type="text" id="name" name="name">
  <input type="submit" value="Envoyer">
</form>

<?php
$nb_arguments = 0;
foreach ($_POST as $key => $value) {
  $nb_arguments = $nb_arguments + 1;
}
echo "Le nombre d'arguments POST envoyés est : " . $nb_arguments;
?>