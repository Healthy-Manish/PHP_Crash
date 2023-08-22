<?php
/*
---------- Object Oriented Programming -----------

From PHP5 onwards you can write PHP in either procedural or
object oriented way. OOP consists Of classes that can hold
"properties" and "methods" . Objects can be created from classes


Access modifiers: Public, Private, Protected

public- can be accessed from anywhere
private - can only be accessed from inside the class
protected - can only be accessed from inside the class and 
by the ineherited classes
*/
class User{
    //properties are attributes that belong to a class
    public $name;
    public $email;
    public $password;

    //A constructor is a method that runs when a object is created
    public function __construct($name, $email, $password)
    {
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;


        // echo 'constructor ran';
    }

    //Method is a function that belong to a class
    function set_name($name){
        $this->name = $name;
    }

    function get_name(){
        return $this->name;
    }
}
//Instatiate a user object
$user1 = new User('Brad', 'brad@123gmail', '3442');
$user2 = new User('John', 'john@gmail', '122232');

$user1->set_name('Brad');
$user2->set_name('John');

// var_dump($user1);
// echo '<br>';
// echo $user1->get_name();
// echo '<br>';

// echo $user2->get_name();
echo $user2->email;
echo '<br>';

//Inheritence 

class Employee extends User {
    public function __construct($name, $email, $password, $title)
    {

    parent::__construct($name, $email, $password);
    $this->title = $title;
    
    }
    public function get_title(){
        return $this->title;
    }
}

$employee1 = new Employee('Sara','sara@gmail', '1221', 'Manager');
echo $employee1->title;