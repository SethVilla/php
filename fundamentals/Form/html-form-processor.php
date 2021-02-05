<?php

if(isset($_POST['submit'])){
$name = $_POST['name'];
$gender = $_POST['gender'];
$submit = $_POST['submit'];



print_r($name . " " . $gender . " " . $submit);
} else {
    echo 'No submission';
}