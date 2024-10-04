<?php

// Constants
// PHP executes code from top to bottom
$firstName = "Ivars";
$firstName = "Mario";
echo $firstName . "<br>"; // Prints Mario

// Define constants
// Case-sensitive - use UPPERCASE

define('STATUS_PAID', 'paid');
echo defined('STATUS_PAID') . "<br>"; // Checks if constant is defined. Prints 1
echo defined('STATUS_NAME') . "<br>"; // Echoes nothing because this constant is not defined

echo STATUS_PAID . "<br>"; // Prints paid // $ <- is not needed
//echo STATUS_NAME . "<br>"; // Prints error because STATUS_NAME is not defined

// Defining constants using 'const' keyword
// Difference between define and const is that const is defined at compile time but define is defined at runtime

const STATUS_PENDING = 'pending';
echo STATUS_PENDING . "<br>"; // Prints pending

const lol = 'lmao'; // Not case-sensitive but stay with CAPITAL CASING for constants
echo lol . "<br>"; // Prints lmao

// Defining constants inside if statement
if (true) {
    define('NAME', 'Ivars');
    echo NAME . "<br>";
}

$sent = 'SENT';
define('STATUS_' . $sent, 'sent');
echo STATUS_SENT . "<br>";

// Predefined constants
echo PHP_VERSION . "<br>"; // Prints version of PHP
echo __LINE__ . "<br>"; // Prints line number where it was called
echo __FILE__ . "<br>"; // Prints file name where it was called
echo __DIR__ . "<br>"; // Prints directory where it was called


// Variable Variables

$foo = 'bar';
$$foo = 'baz'; // Takes the value of $foo and assigns it to $$foo
echo $foo . "<br>"; // Prints bar
echo $bar . "<br>"; // Prints baz
echo $foo, $$foo . "<br>"; // Prints barbaz
echo $foo, ${$foo} . "<br>"; // Prints barbaz
