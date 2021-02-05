<?php

$letters = ['R', 'O', 'N', 'I', 'X', 'V', 'I', 'L', 'L', 'A'];

$result = array_slice($letters, 5);

echo '<pre>';

print_r($result);

$result = array_slice($letters, 0, 5);

print_r($result);

$result = array_slice($letters, -5, 5);

print_r($result);