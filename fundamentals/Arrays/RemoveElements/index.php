<?php


$names = array('Seth', "Cyd", 'Cory', 'Kyle');

$lastSibling = array_pop($names);

$firstSibling = array_shift($names);

echo '<pre>';
print_r($names);