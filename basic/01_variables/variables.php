<?php

/*
    Chapitre 01 - Variables
*/

// → Variables
// Emplacement en mémoire où on peut stocker une valeur
// Préfixer le nom d'un $

$a = 1;
$b = "Hello";
$c = 'Hello';
$d = `Hello`;
$e = 2 + 2;
$f = $a + $e;

$A = 5; // variable différente de $a (sensible à la casse)

// → Constantes
// Emplacement en mémoire où on peut stocker une valeur 
// <!> ne peut pas être réaffectée

define('PI', 3.141592);
$e = PI * $a; // 3.141592 * 1
// PI = 42; // Impossible de modifier une constante

// → NULL
// Absence de valeur (rien informatique)

$variableNull = NULL;

// → Types de données

// Entier
$entier1 = 42;
$entier2 = -42;

// Décimal
$decimal1 = 1.23;
$decimal2 = -1.23;
$decimal3 = 42;

// Chaine de caractères
$chaine1 = "Hello world !";
$chaine2 = "";
$chaine3 = "zB42$1a-!2";

// Booléen
$booleen1 = true;
$booleen2 = false;

// Tableau
// Vu plus tard

// Object
// Vu plus tard



?>