<?php

if(isset($_POST['submit'])){

$length = strlen($_POST['word']);

echo "the string is " . $length . " characters long";

} else {
    echo "enter word please";
}

