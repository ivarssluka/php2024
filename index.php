<?php

/* Strings */

$firstName = 'John'; // You cannot use variables in single quotes
$lastName = 'Doe';
$fullName = "$firstName Doe"; // You can use variables in double quotes
echo $firstName . '<br>';
echo $fullName . '<br>';
$fullName = "{$firstName} Doe"; // You can use variables in double quotes
echo $fullName . '<br>';
//$fullName = "${firstName} Doe"; // This is Deprecated
//echo $fullName . '<br>';

$fullName = "$firstName $lastName"; // You can use variables in double quotes
echo $fullName . '<br>';
$fullName = $firstName . ' ' . $lastName; // String concatenation
echo $fullName . '<br>';

echo $fullName[0] . '<br>'; // Get the first character
echo $fullName[-2] . '<br>'; // Get the second character from the end
echo strlen($fullName) . '<br>'; // Get the length of the string
$fullName[1] = 'I'; // Change the second character
echo $fullName . '<br>';
var_dump($fullName);
echo '<br>';

$fullName[20] = 'X'; // Add an extra character
var_dump($fullName); // This will add an extra character to the string an fill the rest with spaces
echo '<br>';

// Heredoc treats the text as if it were in double quotes

$x = 10;
$y = 20;
$text = <<<TEXT
Line 1 $x
Line two $y
Line three ' " 
TEXT;
echo $text; // Output: Line 1 Line two Line three
echo '<br>';
echo nl2br($text); // Output: Line 1<br />Line two<br />Line three

// Nowdoc treats the text as if it were in single quotes
$text = <<<'TEXT'
Line 1 $x
Line two $y
Line three ' "
TEXT;
// Only difference is that you enclose the text in single quotes
echo $text; // Output: Line 1 $x Line two $y Line three
echo '<br>';
echo nl2br($text); // Output: Line 1<br />Line two $y <br />Line three // Variable values will not be displayed.
// Also, you don't need escape symbols with this syntax

$text = <<<TEXT
<div>
<p>Hello</p>
<p>World</p>
</div>
TEXT;
echo $text; // You can have full html tags here.
echo '<br>';

$text = <<<TEXT
Hello World
TEXT;
var_dump($text); // Output: string(11) "Hello World"
echo '<br>';

$text = <<<TEXT
    Hello World
TEXT;
var_dump($text); // Output: string(15) "Hello World". It counts the spaces as well.
echo '<br>';