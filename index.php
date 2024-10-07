<?php

/* Functions */

function foo()
{
    echo "Hello, World! <br>";
}

foo(); // Call the function to execute

function bar()
{
    return "Hello, World! <br>"; // Return a string but not displaying it
}

echo bar(); // Output: Hello, World!
$greeting = bar();
echo $greeting . '<br>'; // Output: Hello, World!

function test()
{
    return; // Returns null
}

var_dump(test()); // Output: null
echo '<br>';

var_dump(test2());   // Output: Hellooo // You can define a function after it has been called
echo '<br>';
function test2()
{
    return 'Hellooo';
}

/*var_dump(test3());   // Exception is if we use a function with conditional statements // Call to undefined function error
echo '<br>';
if (false) {
    function test3()
    {
        return 'Hellooo';
    }
}*/

/*var_dump(test4());   // Even if we set it to true it still returns error, because it needs to run before it can be called
echo '<br>';
if (true) {
    function test4()
    {
        return 'Hellooo';
    }
}*/

echo '<br>';
if (true) {
    function test4()
    {
        return 'Hellooo';
    }
}
var_dump(test4());  // Now it runs
echo '<br>';

test5(); // Output: Hellooo, but function inside of it doesn't run
hello(); // if we call it separately, then it runs, but you need to run it in order to prevent errors
function test5()
{
    echo 'Hellooo' . '<br>';
    function hello()
    {
        echo 'test 5' . '<br>';
    }
}


name(); // Output: test 6 without error
//test6(); // will output: name with error for the function with the same name

function name()
{
    echo 'test 6' . '<br>';
    function test6()
    {
        echo 'name' . '<br>';

        function name()
        {
            echo 'test 7' . '<br>';
        }
    }
}

// If we want to avoid next, we have to declare strict types
function type(): int
{ // we can hint the return types to functions
    return '1';
//    return []; // Will throw an error because array cannot be converted to int
}

var_dump(type()); // still returns int(1)
echo '<br>';

function test8(): void // hint void if you are not expecting specific return
{
    return;
}

var_dump(test8()); // Output: null
echo '<br>';

function test9(): ?int // ? - stands for nullable type so it can return either integer or null
{
//    return null; // without ? this will throw an error
    return 1;
}

var_dump(test9()); // Output: null
echo '<br>';

function test10(): int|float|array // | - means that the function can return either int or float or array
{
//    return 1;
//    return [1, 2, 3];
    return 0.1;
}

var_dump(test10()); // will output int or float depending on what we return
echo '<br>';

function test11(): mixed // mixed - can return any type. You cannot use ? with mixed because it already includes null
{
//    return 1;
//    return [1, 2, 3];
//    return 0.1;
    return 'test';
}
var_dump(test11());
echo '<br>';