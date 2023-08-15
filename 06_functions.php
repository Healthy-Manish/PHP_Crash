<?php
$y = 12;
    function registerUser($email){
        //to acces global variable in function you have to write global
        global $y;
        // echo $y;
        echo $email.' registered';
    }
    // registerUser('Brad');
    function sum($n1 = 4, $n2= 5){//default values
        return $n1+$n2.'<br>';
    }
   echo sum (5,5);

   $subtract = function($n1, $n2){
    return $n1 -$n2;
   };
   
   $multiply = fn($n1, $n2)=> $n1*$n2; //arrow function

   echo $multiply(9,9);