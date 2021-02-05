<?php 

if(isset($_COOKIE['name'])){
    echo "Your name is" . " " . $_COOKIE['name'];

    echo "<br>";

    echo "Your Age is" . " " . $_COOKIE['age'];

    echo '<br>';

    echo "Your favorite color is" . " " . $_COOKIE['color'];
}