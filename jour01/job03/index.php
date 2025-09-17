<?php

// 1. Déclaration de nos variables
$maVariableBoolean = true;
$maVariableInteger = 42;
$maVariableString = "Hello World!";
$maVariableFloat = 3.14;

/* 2. On commence à afficher la structure HTML du tableau et son en-tête
 On ajoute :
 - Un attribut border pour mieux voir les bordures
 - Un attribut cellpadding pour l'espacement interne
 - Un attribut width pour la largeur
 - Un attribut style pour la couleur du texte
*/
echo "<table border='1' cellpadding='5' width='50%' style='color:red;'>";
echo "  <thead>"; // On ouvre l'en-tête du tableau
echo "    <tr>";
echo "      <th>Type</th>";   // Colonne 1 : Le type de la variable
echo "      <th>Nom</th>";    // Colonne 2 : Le nom de la variable
echo "      <th>Valeur</th>"; // Colonne 3 : La valeur de la variable
echo "    </tr>";
echo "  </thead>";
echo "  <tbody>"; // On ouvre le corps du tableau, qu'on remplira à l'étape 3

// 3. On ajoute une ligne pour chaque variable

// Ligne pour la variable booléenne
echo "    <tr>";
echo "      <td>" . gettype($maVariableBoolean) . "</td>";
echo "      <td>maVariableBoolean</td>";
echo "      <td>" . ($maVariableBoolean ? 'true' : 'false') . "</td>"; // Astuce pour afficher 'true'/'false' au lieu de '1'/''
echo "    </tr>";

// Ligne pour la variable entière
echo "    <tr>";
echo "      <td>" . gettype($maVariableInteger) . "</td>";
echo "      <td>maVariableInteger</td>";
echo "      <td>" . $maVariableInteger . "</td>";
echo "    </tr>";

// Ligne pour la variable string
echo "    <tr>";
echo "      <td>" . gettype($maVariableString) . "</td>";
echo "      <td>maVariableString</td>";
echo "      <td>" . $maVariableString . "</td>";
echo "    </tr>";

// Ligne pour la variable float
echo "    <tr>";
echo "      <td>" . gettype($maVariableFloat) . "</td>";
echo "      <td>maVariableFloat</td>";
echo "      <td>" . $maVariableFloat . "</td>";
echo "    </tr>";

// --- ÉTAPE 4 : FIN DU TABLEAU ---
// On n'oublie pas de fermer les balises du corps et du tableau.
echo "  </tbody>";
echo "</table>";

?>