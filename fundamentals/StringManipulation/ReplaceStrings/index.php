<?php

$string = "Seth|Cyd|Cory|Kyle";

// what you want to replace and with what
$newString = str_replace('|', ', ', $string);

echo $newString;