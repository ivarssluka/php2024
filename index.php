<?php

/* Functions 2 - parameters and arguments */
declare(strict_types=1); // - this will cause an error for function

/*
function foo (int $a, int $b) { // Parameters // You can type hint parameters as well as return type
    return $a + $b;
}

echo foo('1', 2.5); // Arguments // this will throw an error since 8.3.9 version of php has deprecated float to int conversion
// But it will output result anyway*/

function foo (int|float $a, int|float $b)
{
    return $a + $b;
}

echo foo(10, 2.5);
echo '<br>';

function bar (int|float $a, int|float $b = 5): int|float // if not passed as argument, you can define default value for the parameter
{
    return $a + $b;
}

echo bar(10);

function add (int|float $a, int|float $b = 5, int $c): int|float // You cannot have required parameters after optional parameters '$c after $b'
{
    return $a + $b;
}

echo add(10, 5, 2); // throws an error
echo '<br>';

function add2 (int|float $a, int|float $b = 5): int|float
{
    if ($a % 2 === 0) {
        $a /= 2;
    }
    return $a + $b;
}

$a = 6.0;
$b = 7;

echo add2($a, $b) . '<br>'; // Returns 10
var_dump($a, $b); // Returns float(6), int(7);
echo '<br>';

function add3(int|float &$a, int|float $b = 5): int|float // if you add parameter by reference, it will be changed in the function (using & operator)
{
    if ($a % 2 === 0) {
        $a /= 2;
    }
    return $a + $b;
}

$a = 6.0;
$b = 7;

echo add3($a, $b) . '<br>'; // Returns 10
var_dump($a, $b); // Returns float(3), int(7);
echo '<br>';


// Variadic function
function add4(...$numbers): int|float // you can use splat operator to pass variable number of arguments
{
    $sum = 0;
    foreach ($numbers as $number) { // now we can iterate through $numbers array to get outcome
        $sum += $number;
    }
    return $sum;
}
$x = 6.0;
$y = 7;
echo add4($x, $y, 50, 10, 5) . '<br>'; // pass as many arguments as you want


function add5(...$numbers): int|float
{
    return array_sum($numbers); // or use built-in function to relieve the task
}

echo add5(6.0, 7, 50, 10, 5) . '<br>';

function add6(int|float $a, int|float $b, int|float ...$numbers): int|float // you can use splat operator after required parameters and assign a type
{
    return $a + $b + array_sum($numbers);
}

$x = 10;
$y = 11;
//echo add6($x, $y, '50', 10, 5) . '<br>'; // will throw an error because '50' is not a number
echo add6($x, $y, 50, 10, 5) . '<br>';

function add7(int|float $a, int|float $b, int|float ...$numbers): int|float // you can use splat operator after required parameters and assign a type
{
    return $a + $b + array_sum($numbers);
}

$x = 10;
$y = 11;
$numbers = [50, 10, 5];
//echo add7($x, $y, $numbers) . '<br>'; // you cannot just pass an array like that because $numbers isn't integer or float
echo add7($x, $y, ...$numbers) . '<br>'; // split array in separate arguments using ( ... ) operator

function named(int $x, int $y): int
{
    if ($x % $y == 0) {
        return $x / $y;
    }
    return $x;
}

$x = 6;
$y = 3;
echo named($x, $y) . '<br>'; // Returns 2
echo named($y, $x) . '<br>'; // Returns 3 as $y is passed as $x // You should pass arguments in the same order as you pass parameters
echo named(y: $y, x: $x) . '<br>'; // Since PHP 8 you can name arguments and this will resolve the problem
//echo named(x: $y, x: $x) . '<br>'; // This will return an error, you cannot have multiple arguments with the same name
echo named($x, y: $y) . '<br>'; // works fine
//echo named($y, x: $x) . '<br>'; // error

// Naming arguments can become useful in some cases
//setcookie('foo', 'bar', 0, '', '', false, true); // If you want to change httpOnly to true you need to fill all the parameters
//setcookie(name: 'foo', value: 'bar', httponly: true); // in this case it relieves the task


