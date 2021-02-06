<?php 

class User {
    // access modifier public can access outside of class anywhere
    public $name;
    public $age;
    
    // runs when a class is instantiated
    // magic method
    public function __construct($name, $age){
        // magic constant
        echo __CLASS__;
        echo '<br>';
        $this->name = $name;
        $this->age  = $age;
    }

    public function sayHello(){
        return $this->name . ' Says Hello';
    }

    // run for cleanup closing connections
    public function __destruct(){
        echo 'desctruct run';
    }
}

$user1 = new User('Seth', 29);

echo $user1->name;
echo '<br>';

