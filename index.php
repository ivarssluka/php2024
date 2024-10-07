<?php

/* Variable / Anonymous / Arrow functions */

function sum(int|float...$numbers): int|float
{
    return array_sum($numbers);
}
echo sum(1, 2, 3, 4, 5, 6, 7, 8, 9, 10) . '<br>';

function sum2(int|float...$numbers): int|float
{
    return array_sum($numbers);
}
$x = 'sum2'; // Assign function name to a variable
echo $x(1, 2, 3, 4, 5, 6, 7, 8, 9, 10) . '<br>'; // Call the function this way

/*
function sub3(int|float...$numbers): int|float
{
    return array_sum($numbers);
}
$x = 'sum3';
echo $x(1, 2, 3, 4, 5, 6, 7, 8, 9, 10) . '<br>'; // PHP will look for the function 'sum3' and throw an error if not found*/

function sub3(int|float...$numbers): int|float
{
    return array_sum($numbers);
}
$x = 'sum3';
if (is_callable($x)) { // Check if the function is callable
    echo $x(1, 2, 3, 4, 5, 6, 7, 8, 9, 10) . '<br>';
} else {
    echo 'Not callable' . '<br>';
}

// Lambda functions
$z = 1;
$sum = function (int|float ...$numbers): int|float // Because this is an expression we can assign it to variable
{
    echo $z . '<br>'; // You cannot access $z here because of scope
    return array_sum($numbers);
}; // For anonyous functions use semicolon ; at the end to avoid parse error
echo $sum(1, 2, 3, 4, 5, 6, 7, 8, 9, 10) . '<br>'; // And this will work


$sum2 = function(int|float ...$numbers) use ($z): int|float // But we can pass $z to the function after the use keyword
{
    $z = 12; // You can change $z here, but it will not be changed in the global scope as it is a copy of a global
    echo $z . '<br>';
    return array_sum($numbers);
};
echo $sum2(1, 2, 3, 4, 5, 6, 7, 8, 9, 10) . '<br>';
echo $z . '<br>'; // This will print 1 // if you want to change global variable use the '&' operator to pass it by reference with use keyword

// Callable type and callback functions

$array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$array2 = array_map(function($element) { // one way of calling a callback function
    return $element * 2;
}, $array);

echo '<pre>';
print_r($array);
print_r($array2);
echo '</pre>';
echo '<br>';


$x = function($element) { // another way of calling a callback function is to assign it to a variable
    return $element * 2;
};
$array2 = array_map($x, $array); // And then passing the variable to the array_map function

echo '<pre>';
print_r($array);
print_r($array2);
echo '</pre>';
echo '<br>';


function multiply($element) { // another way of calling a callback function is to assign a name to it
    return $element * 2;
};
$array2 = array_map('multiply', $array); // And then passing the name as a string to the array_map function

echo '<pre>';
print_r($array);
print_r($array2);
echo '</pre>';
echo '<br>';

// Arrow functions

$array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$array2 = array_map(fn($element) => $element * 2, $array);  // Just looks cleaner and takes up less space

echo '<pre>';
print_r($array);
print_r($array2);
echo '</pre>';
echo '<br>';


$xyz = 5;
$array2 = array_map(fn($element) => $element * 2 * ++$xyz, $array); // You can add global variables without using the 'use' keyword

echo '<pre>';
print_r($array);
print_r($array2);
echo '</pre>';
echo '<br>';
echo $xyz . '<br>'; // You cannot modify $xyz in the parent scope from anonymous function