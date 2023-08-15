<?php

$string = 'Hello World';

//Get the length of string 
echo strlen($string);
echo '<br>';

//find the position of the first occurence of a substring in a string
echo strpos($string , 'o');
echo '<br>';

//find the position of the last occurence of a substring in a string
echo strrpos($string, 'o');
echo '<br>';

//Reverse a string
echo strrev($string);
echo '<br>';

//convert all characters to lowercase
echo strtolower($string);
echo '<br>';

//convert all character ot uppercase
echo strtoupper($string);
echo '<br>';

//Uppercase the first character of each word
echo ucwords($string);
echo '<br>';

//String replace
echo str_replace('World', 'Everyone', $string);
echo '<br>';

//Return portio of a string specified by the offset and length
echo substr($string, 0, 5);
echo '<br>';
echo substr($string, 5);
echo '<br>';


if(str_starts_with($string, 'Hello')){
    echo 'YES';
}
echo '<br>';

if(str_ends_with($string, 'ld')){
    echo 'YES';
}
echo '<br>';

$string2 = '<script>Hello</script>';
echo htmlspecialchars($string2);
echo '<br>';


printf('%s likes to %s', 'Brad', 'code');//this is good when you have user providing data
echo '<br>';

printf('1+1 = %f', 1+1);
echo '<br>';

