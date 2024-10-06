<?php

/* Floating point numbers */

$x = 13.5; // Floating point
echo $x;
echo "<br>";
$x = 13.5e3;
var_dump($x); // 13500 floating point in exponential form
echo "<br>";
$x = 13.5e-3;
var_dump($x); // 0.0135 floating point in exponential form
echo "<br>";
$x = 13.5e+3;
var_dump($x); // 13500 floating point in exponential form
echo "<br>";
$x = 13_000.5e3;
var_dump($x); // 13000500 floating point in exponential form
echo "<br>";
$x = 13_000.5;
var_dump($x); // 130000.5 floating point in exponential form
echo "<br>";

// Predefined constants
echo PHP_FLOAT_MAX;
echo "<br>";
echo PHP_FLOAT_MIN;
echo "<br>";
echo PHP_FLOAT_DIG;
echo "<br>";
echo PHP_FLOAT_EPSILON;
echo "<br>";

$x = floor((0.1 + 0.7) * 10);
var_dump($x); // Prints 7 because of decimal point imprecision as the result of the equation equals to 0.79999999999999991118
echo "<br>";
$x = ceil((0.1 + 0.7) * 10);
var_dump($x); // Prints 8, which is expected
echo "<br>";
$x = round((0.1 + 0.7) * 10);
var_dump($x); // Prints 8
echo "<br>";
$x = ceil((0.1 + 0.2) * 10);
var_dump($x); // Prints 4 because 0.1 + 0.2 = 0.30000000000000004444 Never you should rely on floating numbers
echo "<br>";

$x = 0.23; // 0.23
$y = 1 - 0.77; // 0.22999999999999998
var_dump($x, $y);
echo "<br>";

echo log(-1); // NAN (Not a Number)
echo "<br>";
echo log(0); // -INF
echo "<br>";
echo log(1); // 0
echo "<br>";
echo INF; // You get this when you go out of bounds of float
echo "<br>";
echo PHP_FLOAT_MAX * 2; // INF
echo "<br>";
$x = PHP_FLOAT_MAX * 2;
var_dump(is_infinite($x)); // True
var_dump(is_finite($x)); // The opposite
var_dump(is_nan($x)); // False
echo "<br>";
var_dump(is_nan(log(-1))); // True
echo "<br>";
$x = 5;
var_dump($x); // Returns int 5
echo "<br>";
var_dump((float)$x); // Returns float 5.0
echo "<br>";
var_dump(floatval($x)); // Returns float 5.0
echo "<br>";
var_dump((int)(float)$x); // Returns int 5
echo "<br>";
$x = "5.5ee";
var_dump((float) $x); // Returns float 5.5
echo "<br>";
$x = "adfjdf";
var_dump((float) $x); // Returns float 0
echo "<br>";
