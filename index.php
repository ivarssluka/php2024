<?php

/* NULL */

// null constant

var_dump($x); // Prints NULL with an error
echo '<br>';
var_dump(is_null($x)); // Prints boolean true with an error

$x = null;
echo $x . '<br>'; // When echoing null, it prints nothing because it gets converted to an empty string
var_dump($x); // Prints NULL
echo '<br>';
var_dump(is_null($x)); // Prints boolean true
echo '<br>';

$x = 212;
var_dump(is_null($x)); // Prints boolean false
echo '<br>';

$x = null;
var_dump($x === null); // Prints boolean true
echo '<br>';
var_dump($x !== null); // Prints boolean false
echo '<br>';

$x = 0000;
var_dump($x);
echo '<br>';
unset ($x); // Unsets the value of $x
var_dump($x); // Prints an error and returns NULL
echo '<br>';

// Type Casting
$x = null;
var_dump((string)$x); // Prints an empty string
echo '<br>';
var_dump((int)$x); // Prints 0
echo '<br>';
var_dump((bool)$x); // Prints boolean false
echo '<br>';
var_dump((double)$x); // Prints float 0
echo '<br>';
var_dump((array)$x); // Prints an empty array
echo '<br>';