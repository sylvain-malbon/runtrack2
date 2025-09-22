<?php
/*
Job 01
Développez un algorithme qui affiche le nombre d’arguments $_GET.
Tips :
Pour tester votre code, créez un formulaire html <form> de type GET avec différents
champs <input> de type “text” et un <input> de type “submit” pour l’envoi.
Vous pouvez ensuite afficher avec echo directement dans votre page par exemple :
“Le nombre d’argument GET envoyé est : “
*/
?>
<form method="get" action="index.php">
  <label for="name">Pseudonyme :</label>
  <input type="text" id="name" name="name">
  <input type="submit" value="Envoyer">
</form>

<?php
$nb_arguments = 0;
foreach ($_GET as $key => $value) {
  $nb_arguments = $nb_arguments + 1;
}
echo "Le nombre d'arguments GET envoyés est : " . $nb_arguments;
?>