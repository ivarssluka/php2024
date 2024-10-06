<?php

/* Return / Declare / goto */
declare (strict_types = 1);

function sum(int $x, int $y): int
{
    $z = $x + $y;
    return $z; // it will stop execution of function and return given argument
}
$x = sum(5, 10); // return statement in function does not stop execution of the script
echo $x;
echo '<br>';
echo 'Hello, World!' . '<br>';


$x = sum(5, 10); // return statement in function does not stop execution of the script
echo $x;
//return; // if we use return globally it will stop execution of the script and following code will not be executed
echo '<br>';
echo 'Hello, World!' . '<br>';

// declare - ticks
$x = 3;
$y = 5;
$z = $x + $y;
// each of these expressions cause a tick
// you can call function on ticks

function onTick()
{
    echo "Tick <br>";
}
register_tick_function('onTick');
declare(ticks = 1); // Specify how many ticks should be executed

$i = 0;
$length = 10;
while ($i < $length) {
    echo $i++ . '<br>';
}

declare(ticks = 3); // Specify how many ticks should be executed

$i = 0;
$length = 10;
while ($i < $length) {
    echo $i++ . '<br>';
}
// declare - encoding

// declare - strict_types - we declare strict types at the beginning of script

function add(int $x, int $y): int
{
    return $x + $y;
}

echo add(5, 10); // everything works as expected

echo add(5, '10'); // fatal error, strict types are not met
// If you want to use strict types in the file where the function gets called from, you will need to include file with declaration.