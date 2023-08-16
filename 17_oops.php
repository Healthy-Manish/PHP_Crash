<?php
/*
---------- Object Oriented Programming -----------

From PHP5 onwards you can write PHP in either procedural or
object oriented way. OOP consists Of classes that can hold
"properties" and "methods" . Objects can be created from classes

*/

class User{
    //properties ae attributes that  belong to a class

    public $name;
    public $email;
    public $password;
//  A constructor is a method that runs when an object is created

public function __construct($name, $email, $password){
    $this->name = $name;
    $this->email = $email;
    $this->password = $password;

    // echo 'constructor run';
}

    //Method is a function to a class 
    function set_name($name){
        $this->name = $name;
    }

    function get_name()  {
        return $this->name;
    }
}
//Instantiate a user object
$user1 = new User('Brad', 'Brad@gmail','12345');
$user2 = new User('John','John@gmail','123');

// $user1->set_name('Brad'); 
// $user2->set_name('John'); 


// var_dump($user1);

// echo $user1->email;
// echo $user2->password;

class Employee extends User{
    public function __construct($name, $email, $password, $title){
        parent::__construct($name, $email, $password);
        $this->title = $title;

    }
public function get_title(){
    return $this->title;
}
}
$employee1 = new Employee('Sara','sara@gmail','23455','SDE');

echo $employee1->get_title();