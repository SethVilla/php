<?php

$names = array("Seth", "Cyd", "Cory", "Kyle");

print_r($names[1]);

$random = array_rand($names);

echo '<br>';
echo $names[$random];
echo '<br>';

?>

<?php

$suit = ['hearts', 'clubs', 'diamonds', 'spades'];

$suit = $suit[array_rand($suit)];

$value = array('Ace', 2, 3, 4, 5, 6, 7, 8, 9, 10, 'Jack', 'Queen', 'King');

$value = $value[array_rand($value)];

$card = $value . ' of ' . $suit;

echo $card;

?>