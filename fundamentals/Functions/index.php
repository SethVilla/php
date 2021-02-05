<?php 

function hello(){
    echo "Hello World";
}

hello();

function multiply($number1, $number2){
    $result = $number1 * $number2;
    echo $result;
}

echo "<pre>";

echo multiply(2,4);

echo "<pre>";

function uppercase($name){
    $result = strtoupper($name);
    return $result;
}

echo uppercase('seth');

function calculate($number1, $number2){
    $add = $number1 + $number2;
    $substract = $number1 - $number2;
    return array($add, $substract);

}

echo '<pre>';
$result = calculate(5,7);

echo $result[0];
echo $result[1];

echo "<br>";

print_r($result);