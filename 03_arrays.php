<?php
//two ways to make arrays
$numbers = [1,44,55,77];
$fruits = array('apple', 'orange','pear');

// var_dump($numbers);
// echo $fruits[1];

//Associate Array
$colors = [
    1 => 'red',
    4 => 'blue',
    6 => 'green'
];

echo $colors[4];

$hex = [
    'red' => '#f00',
    'blue' => '#0f0',
    'green' => '#00f'
];
echo $hex['red'];


$mul_array =[
[
    1 => 'red',
    4 => 'blue',
    6 => 'green'
],
[
    'red' => '#f00',
    'blue' => '#0f0',
    'green' => '#00f'
]
];

echo $mul_array[0][4];
echo $mul_array[1]['green'];

var_dump(json_encode($mul_array));