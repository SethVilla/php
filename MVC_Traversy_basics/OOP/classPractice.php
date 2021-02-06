<?php

//define a class 

class User {
    // properties
    public $name = 'Seth';
    // Methods (functions)
    public function sayHello(){
        return $this->name . ' Says Hello';
    }
}

// Instantiate a user object from the user class

$user1 = new User();
$user2 = new User();
$user2->name = 'Crimson';

echo $user1->name;

echo '<br>';

echo $user2->name;

echo '<br>';

echo $user1->sayHello();