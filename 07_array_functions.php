<?php
$fruits = ['apple', 'orange', 'pear'];

echo count($fruits).'<br>';

//search array 
var_dump(in_array('apple',$fruits)).'<br>';

//add to array

$fruits[] = 'grapes';
//another method 
array_push($fruits,'blueberry');

//to add something in beginening
array_unshift($fruits, 'mango');

// //remove from array
// array_pop($fruits);//delete from last
// array_shift($fruits);//delete from starting

// unset($fruits[2]);

// print_r($fruits);
// //spliting the arrray
// $chunked_array = array_chunk($fruits, 2);
// print_r($chunked_array).'<br>';

// //concatinate array
// $arr1 = [1,2,3];
// $arr2 = [4,5,6];
// $arr3 = array_merge($arr1,$arr2);
// //another method
// $arr4 = [...$arr1,...$arr2];
// print_r($arr3);

// $a = ['green', 'red', 'yellow'];
// $b = ['avocado', 'apple','bananas'];
// $c = array_combine($a, $b);
// print_r($c).'<br>';

// // $keys = array_keys($c);
// // print_r($keys);

// //flipping keys
// $flipped = array_flip($c);
// print_r($flipped);

$numbers = range(1,20);
// print_r($numbers);

$newNumbers = array_map(function($number){
    return "Number ${number}";
}, $numbers);

print_r($newNumbers);
$lessThan10 = array_filter($numbers, fn($number)=> $number <=10);

print_r($lessThan10);

$sum = array_reduce($numbers, fn($carry, $number)=> $carry +$number);
var_dump($sum);
