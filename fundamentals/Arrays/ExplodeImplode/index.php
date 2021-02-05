<?php 

$string = "Seth, Cyd, Cory, Kyle";

$names = explode(", ", $string);

array_push($names, 'Ronix', 'Uxbal');

array_unshift($names, "Spike");

echo "<pre>";

print_r($names);

$imploded = implode('|', $names);

print_r($imploded);