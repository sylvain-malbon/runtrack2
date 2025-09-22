<?php
/*
Job 06
Faire un formulaire de type GET avec un champ <input> text nommé “nombre” et un
bouton submit.
Après validation du formulaire :
● si la valeur entrée est un nombre pair, afficher “Nombre pair”,
● si c’est un nombre impair, afficher “Nombre impair”.
*/
?>

<form method = "GET"><input name="nombre" type="text"/><button type= "submit">Envoyer</button>

<?php
 if ($_GET['nombre'] % 2 == 0) {
echo "nombre pair";
 }
 else {
echo "nombre impair";
 }
?>