<?php

class User {
    public $name;
    public $age;
    public static $minPassLength = 6;

    public static function validatePass($pass){
        if(strLen($pass) >= self::$minPassLength){
            return true;
        } else {
            return false;
        }
    }
}

$pasword = 'Ronix';

if(User::validatePass($pasword)){
    echo 'Password Valid';
} else {
    echo 'Password not valid';
}