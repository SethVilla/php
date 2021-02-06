<?php

class User {
    //access modifier
    protected $name;
    protected $age;

    public function __construct($name, $age){
        $this->name = $name;
        $this->age  = $age;
    }
}


class Customer extends User {
    private $balance;

    public function __construct($name, $age, $balance){
        parent::__construct($name, $age);
        $this->balance = $balance;
    }

    public function pay($amount){
        return $this->name . ' paid $' .$amount;
    }

    public function getBalance(){
        return $this->balance;
    }
}

$customer1 = new Customer('Villa', 29, 1000);

echo $customer1->pay(100);