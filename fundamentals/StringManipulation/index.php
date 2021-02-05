<?php

// length
$sentence = "whats my length batman";

$length = strlen($sentence);

echo $length;

echo "<br>";

$words = str_word_count($sentence);

echo $words;

$palabra = 'holidays';

$letras = str_split($palabra, 3);

echo "<pre>";

print_r($letras);



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="html-form-word-length-processor.php" method="post">
        <input name="word" type="input">
        <input type="submit" name="submit">
    </form>
</body>
</html>