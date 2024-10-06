<?php

/* Booleans */

$isComplete = true;
$isComplete = True;
$isComplete = false; // booleans are not case sensitive


echo $isComplete; // Prints nothing, because echo assumes it's a string. If true it prints "1".
var_dump($isComplete); // Prints bool(false);
// Integers 0 -0 = false
// Integers 1 -1 = true
// Floats 0.0 -0.0 = false
// Floats 1.0 -1.0 = true

// Strings "" = false
// String '0' = false
$$isComplete = 'false'; // Will print true, because it is not an empty string
// [] = false
// Null = false

// Everything else pretty much evaluates to true

if ($isComplete) { // Evaluates to true
    echo "Success!";
} else {
    echo "Failure!";
}