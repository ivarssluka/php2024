<?php

/* Integers */

// Integers are numbers without decimal point

echo PHP_INT_MAX . "<br>"; // You can check the maximum value of an integer
echo PHP_INT_MIN . "<br>"; // You can check the minimum value of an integer
echo PHP_INT_SIZE . "<br>"; // You can check the size of an integer

$x = 10;
echo $x . "<br>"; // Base 10
$y = 0x2A;
echo $y . "<br>"; // Hexadecimal base
$z = 012;
echo $z . "<br>"; // Octal base
$w = 0b1010;
echo $w . "<br>"; // Binary base

$max = PHP_INT_MAX;
var_dump($max);
echo "<br>"; // Maximum value of an integer
var_dump($max + 1);
echo "<br>"; // This will change the number to float.

$min = PHP_INT_MIN;
var_dump($min); // Minimum value of an integer
echo "<br>";
var_dump($min - 1); // This will change the number to float.
echo "<br>";

$num = (int) true;
var_dump($num); // 1
echo "<br>";
$num = (integer) false;
var_dump($num); // 0
echo "<br>";
$num = (int) "10";
var_dump($num); // 10
echo "<br>";
$num = (int) "10.5 and some string";
var_dump($num); // Prints 10 ignoring the string
echo "<br>";
$num = (int) "10.9"; // Rounds number down
var_dump($num); // 10
echo "<br>";
var_dump(is_int($num)); // Checks if number is an integer and returns true
echo "<br>";
$num = null;
var_dump(is_int($num)); // Checks if number is an integer and returns false
echo "<br>";
$num = (int) null;
var_dump(is_int($num)); // Checks if number is an integer and returns true, because of type casting.
echo "<br>";

$num = 10_000_000;
var_dump($num); // Prints the number ignoring underscores
echo "<br>";
$num = '10_000_000';
var_dump($num); // Prints the number with underscores as it is a string.
echo "<br>";
$num = (int) '10_000_000';
var_dump($num); // Prints int(10) and ignores everything after 10;
echo "<br>";