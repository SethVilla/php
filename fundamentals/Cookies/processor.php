<?php

print_r($_REQUEST['name']);

// url change does not allow the $_POST method to work;
//.htacess

if(isset($_REQUEST['submit'])){
    setcookie('name', $_REQUEST['name']);
    setcookie('age', $_REQUEST['age']);
    setCookie('color', $_REQUEST['color']);
} else {
    echo "Fill out the form yo";
}
