<?php
/**
INSTRUCTIONS:
Job 04
Créez une fonction nommée “calcule()” qui prend 3 paramètres :
● le premier, “$a”, est un nombre,
● le deuxième, "$operation", est un caractère (string) contenant le type d’opération
(+, -, *, /, %),
● le troisième, “$b”, est un nombre.
La fonction doit retourner le résultat de l’opération.
*/

/* Essai :
function calcule($a, $operation, $b) {
    if ($operation === "*") {
    return $a * $b;
}
}

// test avec résultat = à 12 normalement :
$a = 3;
$operation = "*";
$b = 4;

echo "Test : ";
echo $a . $operation . $b;
echo "=";
echo calcule(3, "*", 4);
*/

// Il faut tous les opérateurs apparemment...


function calcule($a, $operation, $b) {
    if ($operation === "+") {
        return $a + $b;
    } elseif ($operation === "-") {
        return $a - $b;
    } elseif ($operation === "*") {
        return $a * $b;
    } elseif ($operation === "/") {
        return $a / $b;
    } elseif ($operation === "%") {
        return $a % $b;
    } else {
        return "Opération inconnue ❌";
    }
}

// Test avec tableau pour les opérations et  incrémentation avec limite pour les 2 facteurs :
$operations = ["+", "-", "*", "/", "%"];

for ($a = 1; $a <= 10; $a++) {
    for ($b = 1; $b <= 10; $b++) {
        foreach ($operations as $op) {
            echo "Test : $a $op $b = " . calcule($a, $op, $b) . "<br>";
        }
    }
}

?>