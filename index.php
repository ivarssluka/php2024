<?php

declare(strict_types=1);

/* Data types and Type Casting */

# There are 4 Scalar Types
# bool - true/false
$completed = true;
# int - 1,2,3, -100 (whole numbers)
$score = 100;
# float - 1.0, 2.0, 3.0, -100.0 (decimal numbers)
$pi = 3.14;
# string - "Hello World"
$greeting = "Hello World";

echo $completed . ' - ' . gettype($completed) . '<br>';
echo $score . ' - ' . gettype($score) . '<br>';
echo $pi . ' - ' . gettype($pi) . '<br>'; // gettype() prints double because of older terminology
echo $greeting . ' - ' . gettype($greeting) . '<br>';

var_dump($greeting);
echo '<br>';
var_dump($score);
echo '<br>';
var_dump($pi); // var_dump() prints float because of the modern type terminology
echo '<br>';
var_dump($completed);
echo '<br>';

# 4 Compound Types

# array

$companies = []; // empty array
echo $companies . '<br>'; // Array to string conversion error
echo gettype($companies) . '<br>';
print_r($companies);
$companies = [1, 2, 3, 4, 5, 'hello', 'world', true];
print_r($companies);
echo '<br>';
var_dump($companies);
echo '<br>';

// Alternative syntax
$array = array();
$array = array(1, 2, 3, 4, 5, 'hello', 'world', true);
print_r($array);
echo '<br>';
var_dump($array);
echo '<br>';


// Rest of them we will cover separately later in the course on their own branches

# object
# callable
# iterable


# 2 Special Types
# resource
# null

function sum($x, $y)
{
    var_dump($x, $y); // prints int 2 and string 3
    echo '<br>';
    return $x + $y;
}

echo sum(2, '3') . '<br>';
$sum = sum(2, '3');
echo $sum . '<br>';
var_dump($sum);
echo '<br>';

function sum2(int $x, int $y): int
{
    var_dump($x, $y); // prints int 2 and int 3 because we specified the type. It is called 'type juggling' or 'type casting'
    echo '<br>';
    return $x + $y;
}

echo sum2(2, 3) . '<br>';
$sum2 = sum2(2, 3);
echo $sum2 . '<br>';
var_dump($sum2);
echo '<br>';

function sum3(int $x, int $y)
{
    $x = 4.3; // you can still override the type of x and y
    $y = 5.6;
    var_dump($x, $y); // prints float 4.3 and float 5.6
    echo '<br>';
    return $x + $y;
}

echo sum3(2, 3);
echo '<br>';

// Strict types
function sum4(float $x, float $y)
{
    $x = 4;
    $y = 5;
    return $x + $y;
}

//$sum4 = sum4(2,'3.0'); // will throw an error

$sum4 = sum4(2, 3);
echo $sum4 . '<br>';
var_dump($sum4);
echo '<br>';
var_dump($sum4);
echo '<br>';

// it is better to choose the type you want to use to avoid unwanted errors

// Type casting

$x = (int) '5';
var_dump($x); // prints int 5
echo "<br>";
$x = (float) '5.0';
var_dump($x); // prints float 5.0
echo "<br>";
$x = (string) 5;
var_dump($x); // prints string 5
echo "<br>";
$x = (bool) 0;
var_dump($x); // prints bool false
echo "<br>";
$x = (bool) 'hello';
var_dump($x); // prints bool true
echo "<br>";
