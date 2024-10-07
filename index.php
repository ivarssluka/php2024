<?php

/* Variable scope */

$x = 5; // Global variable


include ('script.php'); // We will have the $x variable available in this file

echo '<br>';
echo $x; // this will output 10 because we changed its value in script.php file.

function test() {
    echo $x . '<br>';
}
test(); // This will output an error because $x is not available in function test()

function test2() {
    $x = 1; // we can define variable inside the function
    echo $x . '<br>';
}
test2(); // This will output 1

function test3($x) { // or we can pass $x as a parameter
    echo $x . '<br>';
}
test3($x); // and as an argument to access it

function test4() {
    global $x; // another way is to add a global keyword to tell function we are using global variable
    echo $x . '<br>';
}
test4(); // The function will output 10

function test5() {
    global $x; // Because this is the reference to global variable
    $x = 20; // We can change its value here
    echo $x . '<br>';
}
test5(); // The function will output 20
echo $x . '<br>'; // The global variable will output 20


function test6()
{
    echo $GLOBALS['x'] . '<br>'; // We can access global variables in $GLOBALS array specifying their name
    $GLOBALS['x'] = 30; // And we can change its value here
    echo $GLOBALS['x'] . '<br>'; // This will output 30
}
test6(); // The function will output the new value of $x (30)
// Not really recommended to use global variables.

function getValue() {
    $value = someVeryExpensiveFunction();

    // some more pocessing with $value

    return $value;
}

function someVeryExpensiveFunction()
{
    sleep(2);
    return 10;
}
//echo getValue() . '<br>'; // This will output 10 after 2 seconds
//echo getValue() . '<br>'; // You will probably call this function many times
//echo getValue() . '<br>'; // But it will take now 6 seconds to display all 3 values

function getValue2()
{
    static $value2 = null; // Instead we can add static value here to cache the result

    if ($value2 === null) {
        $value2 = someVeryExpensiveFunction();
    }
    return $value2;
}

function someVeryExpensiveFunction2()
{
    sleep(2);
    return 10;
}
echo getValue2() . '<br>';
echo getValue2() . '<br>';
echo getValue2() . '<br>'; // Now this will only sleep for 2 seconds before returning all values.