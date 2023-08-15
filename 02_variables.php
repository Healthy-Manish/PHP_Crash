<?php
/* 
PHP DATA TYPES

-String  series of characters surrounded bt quotes
-Integer Whole numbers
-Float   decimal numbers
-Boolean true or false
-Array   special variable , which can hold more than one
value
-object  A class
-NULL    empty variable
- Resources  special variable that holds a resource


------------- Variable Rules ------------------
-Variable must be prefixed with $
-Variables must start with  a letter or the underscore 
character
-variable can't start with numbers
-variables can only contain alpha-numeric characters and underscores(A-z, 0-9, and _)
- Variables are case-sensitive ($name and $Name are two 
diffrent variables)
*/

$name = 'Brad';
$age = 40;
$has_kids = true;
$cash_on_hands = 20.75;
echo $has_kids;
// var_dump($has_kids);
// var_dump($cash_on_hands);

// echo $name.' is '.$age.' years old';
echo "${name} has ${cash_on_hands} ";

// $x = '5'+'5';
// var_dump($x);
// echo 10-5;
define('HOST', 'localhost');
define('DB_NAME', 'dev_db');
echo HOST;
?>