<?php 

class User {
    // access modifier only can be changed within class
    private $name;
    private $age;

    public function __construct($name, $age){
        $this->name = $name;
        $this->age  = $age;
    }

    public function getName(){
        return $this->name;
    }

    public function setName($name){
        $this->name = $name;
    }

    //__get Magic Method
    public function __get($property){
        if(property_exists($this, $property)){
            return $this->$property;
        }
    }
    // __set Magic Method
    public function __set($property, $value){
        if(property_exists($this, $property)){
            $this->$property = $value;
        }
        return $this;
    }
}

$user1 = new User('Seth', 29);

$user1->__set('name', 'crimson');

echo $user1->name;