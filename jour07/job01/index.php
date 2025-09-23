<?php
/**
INSTRUCTIONS:
Job 01
Créez une fonction nommée “hello()”. Cette fonction, une fois appelée, doit afficher sur
la page : “Hello LaPlateforme!”.
*/

/* 🧪 Première version :
function hello() { 
    return "Hello LaPlateforme"; 
} 
echo hello(); // print et echo en php ne sont pas des fonctions mais des construction de langage/instructions
*/

/* 🐍 Comparaison avec Python : 

def hello(): # comme pour php, ne pas oublier ()
    return "Hello LaPlateforme!" # return comme pour php

print(hello()) # print est une fonction
*/

// ✅ 2e version PHP qui est la bonne pour l'exo :
function hello() { 
    echo "Hello LaPlateforme"; } 
hello(); // on appelle la fonction qui est déjà en mode echo


/* 🐍 2e version Python :
Ce qui donne qqc de plus logique aussi en python :
def hello():
    print("Hello LaPlateforme!") # print est une fonction
hello() # on appelle la fonction
*/

/* ⚠️ Version finale PHP : */
/* ⚠️ Cette version utilise un paramètre, ce qui la rend plus flexible,
mais elle ne correspond pas exactement à la consigne qui demande une fonction sans argument.
function hello($message) {
    echo $message;
}
hello("Hello LaPlateforme");
*/
?>