<?php

/* Operators */

// Arithmetic operators ( + - * / % ** )

$x = 10;
$y = 2;

var_dump($x + $y); // Add operator
echo '<br>';
var_dump($x - $y); // Subtract operator
echo '<br>';
var_dump($x * $y); // Multiply operator
echo '<br>';
var_dump($x / $y); // Divide operator
echo '<br>';
var_dump($x % $y); // Modulo operator returns the remainder of the division
echo '<br>';
var_dump($x ** $y); // Exponent operator
echo '<br>';

$x = 10;
$y = -2;

var_dump($x + $y);
echo '<br>';
var_dump($x - $y);
echo '<br>';
var_dump($x * $y);
echo '<br>';
var_dump($x / $y);
echo '<br>';
var_dump($x % $y);
echo '<br>';
var_dump($x ** $y);
echo '<br>';

$x = '10';
$y = 2;

var_dump($x); // Outputs string 10
echo '<br>';
var_dump(+$x); // Converts string 10 to int 10
echo '<br>';
var_dump(-$x); // Converts string 10 to int -10
echo '<br>';

$x = +'10';
var_dump($x); // Outputs int 10
echo '<br>';

$x = 10;
$y = 2;

var_dump($x / $y); // Outputs int 5.0
echo '<br>';
$y = 3;
var_dump($x / $y); // Outputs float 3.333333
echo '<br>';
$y = 2.0;
var_dump($x / $y); // Outputs float 5
echo '<br>';

$y = 0;
//var_dump($x / $y); // Outputs error dividing by zero
//echo '<br>';
var_dump(fdiv($x, $y)); // Outputs float INF
echo '<br>';

$y = 3;
var_dump($x % $y); // Casts an int 1
echo '<br>';

$x = 10.5;
$y = 2.5;
var_dump($x % $y); // Outputs int 0 as this is depracated Implicit conversion form
echo '<br>';

var_dump(fmod($x, $y)); // Using fmod() function will return proper result
echo '<br>';
$x = 10;
$y = -3;
var_dump($x % $y); // Outputs int 1 as it takes the sign of the first number
echo '<br>';

$x = -10;
$y = 3;
var_dump($x % $y); // Outputs int -1 as it takes the sign of the first number
echo '<br>';

// Assignment operators ( = += -= *= /= %= **= )

$x = 10; // Assigns value of 10 to $x
var_dump($x);
echo '<br>';
$x = $y = 10; // Assigns value of 10 to $x and $y
var_dump($x, $y);
echo '<br>';
$x = ($y = 10) + 5; // Assigns value of 15 to $x and value of 10 to $y
var_dump($x, $y);
echo '<br>';

$x = 10;
var_dump($x);
echo '<br>';
$x = $x + 5; // Assigns value of 15 to $x
var_dump($x);
echo '<br>';
$x += 5; // Assigns value of 20 to $x by adding 5
var_dump($x);
echo '<br>';

$xx += 5;
var_dump($xx); // $xx is not defined and you see an error, but the value is still 5;
echo '<br>';

// String operators ( . .= )

$x = 'Hello';
var_dump($x . ' World');
echo '<br>';
$x .= ' World'; // Assigns value of 'Hello World' to $x
var_dump($x);
echo '<br>';

// Comparison operators ( == === !== != <> < > <= >= <=> ?? ?: )

$x = 5;
$y = 3;

var_dump($x == $y); // Outputs bool false
echo '<br>';
var_dump($x != $y); // Outputs bool true
echo '<br>';
var_dump($x === $y); // Outputs bool false strict output checks the data type as well as the value
echo '<br>';
var_dump($x !== $y); // Outputs bool true
echo '<br>';

$x = 5;
$y = '5';

var_dump($x == $y); // Outputs bool true
echo '<br>';
var_dump($x != $y); // Outputs bool false
echo '<br>';
var_dump($x === $y); // Outputs bool false strict output checks the data type as well as the value
echo '<br>';
var_dump($x !== $y); // Outputs bool true
echo '<br>';
var_dump($x <> $y); // Outputs bool false pretty much same as loose inequality operator
echo '<br>';

$x = 10;
$y = 5;
var_dump($x <=> $y); // Outputs int 1
echo '<br>';
$y = 10;
var_dump($x <=> $y); // Outputs int 0
echo '<br>';
$x = 5;
var_dump($x <=> $y); // Outputs int -1
echo '<br>';

var_dump(0 == 'hello'); // Outputs bool false // php7.4 will say true
echo '<br>';

$x = 'Hello World';
$y = strpos($x, 'H');
if ($y == false) { // Loose comparison will agree that index 0 is false and return H is not found
    echo 'H Not found';
} else {
    echo 'H found at index' . $y . '<br>';
}
echo '<br>';
if ($y === false) { // Strict comparison will not agree that index 0 is false and return the index of H
    echo 'H Not found';
} else {
    echo 'H found at index' . $y . '<br>';
}

// Conditional operators ( ? : ) ternary operator expects three values

$x = 'Hello World';
$y = strpos($x, 'H');
$result = $y === false ? 'H Not found' : 'H found at index' . $y;
echo $result . '<br>';

$x = null;
$y = $x ?? 'Hello World'; // Null coalescing operator will return 'Hello World' if $x is null
echo $y . '<br>';

$x = false;
$y = $x ?? 'Hello World'; // Null coalescing operator will return false because $x is false
var_dump($y);
echo '<br>';

$y = $xxx ?? 'Hello World'; // Null coalescing operator will return 'Hello World' because $xxx is not defined
var_dump($y);
echo '<br>';

// Error control operators ( @ )

$x = file('foo.txt'); // Prints an error if file does not exist
var_dump($x);
echo '<br>';

$x = @file('foo.txt'); // Doesn't print error if file does not exist
var_dump($x); // Outputs false. This operator is not suggested unless you have a good reason to use it
echo '<br>';

// Increment/Decrement operators ( ++ -- )

$x = 10;
$x ++ ; // Outputs 11
var_dump($x);
echo '<br>';
$x -- ; // Outputs 10
var_dump($x);
echo '<br>';
++ $x ; // Outputs 11
var_dump($x);
echo '<br>';
-- $x ; // Outputs 10
var_dump($x);
echo '<br>';
echo $x ++ . '<br>'; // Outputs 10
echo $x . '<br>'; // Outputs 11
echo ++$x . '<br>'; // Outputs 12
echo $x . '<br>'; // Outputs 12

$x = null;
echo ++$x . '<br>'; // Outputs 1
$x = null;
echo --$x . '<br>'; // has no effect on null


// Logical operators ( && || ! and or xor )

$x = true;
$y = false;
var_dump($x && $y); // Outputs bool false
echo '<br>';
var_dump($x or $y); // Outputs bool true
echo '<br>';
var_dump(!$x); // Outputs bool false
echo '<br>';
var_dump($x xor $y); // Outputs bool true
echo '<br>';

$x = true;
$y = false;
$z = $x && $y;
var_dump($z); // Outputs bool false
echo '<br>';

$z = $x and $y;
var_dump($z); // Outputs bool true, because assignment operator gets evaluated first
echo '<br>';

$x = false;
$y = false;
function hello()
{
    echo 'Hello World';
    return false;
}

var_dump($x && hello() || true ); // Outputs bool true because or operator needs to check both sides
echo '<br>';

// Bitwise operators ( & | ^ ~ << >> )

$x = 6;
$y = 3;
var_dump($x & $y); // Outputs int 2 because 6 is binary 110 and 3 is binary 011 which is binary 010, which is 2 in decimal
echo '<br>';

var_dump($x | $y); // Outputs int 7 because 6 is binary 110 and 3 is binary 011 which is binary 111, which is 7 in decimal
echo '<br>';

var_dump($x ^ $y); // Outputs int 5 because 6 is binary 110 and 3 is binary 011 which is binary 101, which is 5 in decimal
echo '<br>';

var_dump(~$x & $y); // Outputs 1
echo '<br>';

var_dump($x << $y); // Outputs 48 // 110 << becomes 110000 = 16 + 32 = 48
echo '<br>';

// Array operators ( + == === != !== <> )

$x = ['a', 'b', 'c'];
$y = ['d', 'e', 'f'];

$z = $x + $y;
var_dump($z); // Outputs array(3) { [0]=> string(1) "a" [1]=> string(1) "b" [2]=> string(1) "c" }
echo '<br>';

$y = ['d', 'e', 'f', 'g'];
$z = $x + $y;
var_dump($z); // Outputs array(4) { [0]=> string(1) "a" [1]=> string(1) "b" [2]=> string(1) "c" [3]=> string(1) "g" }
echo '<br>';

$x = ['a' => 1, 'b' => 2, 'c' => 3];
$y = ['d' => 4, 'e' => 5, 'f' => 6];
var_dump($x + $y); // Outputs combined array
echo '<br>';

$z = $x == $y;
var_dump($z); // Outputs bool false
echo '<br>';

$y = ['a' => 1, 'b' => '2', 'c' => 3];
$z = $x == $y;
var_dump($z); // Outputs bool true
echo '<br>';

$y = ['a' => 1, 'c' => 3, 'b' => '2'];
$z = $x === $y;
var_dump($z); // Outputs bool false because order is not the same even if values are the same
echo '<br>';


// Last three operators will get covered later in course when we start learning about objects.

// Execution operators ( `` )

// Type operators ( instanceof )

// Nullsafe operator - PHP8 (?)