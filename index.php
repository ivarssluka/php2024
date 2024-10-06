<?php

/** Loops */

// while
$i = 0;
while ($i <= 10) {
    echo $i . ','; // this will print numbers from 0 to 10 inclusive
    $i++;
}
echo "<br>";

$i = 15;
while ($i >= 0) {
    echo $i . ','; // this will print numbers from 15 to 0 inclusive
    $i--;
}
echo "<br>";

$i = 20;
while ($i <= 10) {
    echo $i . ','; // this will print nothing
}
echo "<br>";

/*
$i = 0;
while ($i <= 10) {
    echo $i; // if you don't set increment ($i++) after each iteration, this loop will run forever and eventually crash.
}
*/

$i = 0;
while (true) {
    if ($i >= 10) { // this infinite loop will stop after 10 iterations
        break;
    }
    echo $i++ . ',';
}
echo "<br>";

$i = 0;
while ($i <= 15) {
    if ($i % 2 == 0) {
        $i++;
        continue;
    }
    echo $i++ . ',';
}
echo "<br>";

// do while

$i = 0;
do {
    echo $i++ . ',';
} while ($i <= 15);
echo "<br>";

$i = 25;
do {
    echo $i++ . ',';
} while ($i <= 15); // This will still execute once because the echo statement is before the condition we check for.
echo "<br>";

// for

for ($i = 0; $i <= 10; $i++) { // this will print 0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10
    echo $i . ',';
}
echo "<br>";

/*
for (; ; ) {
    echo $i . ','; // This will act as a 'while true' loop, if you don't provide expressions
}
*/

for ($i = 0; $i < 10; print $i, $i++) { // this will print 0, 1, 2, 3, 4, 5, 6, 7, 8, 9
//    echo $i;
}
echo "<br>";

for ($i = 0; print $i, $i < 10; $i++) { // this will print 0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, because the print statement is before the condition
//    echo $i;
}
echo "<br>";

$text = 'Hello World';
for ($i = 0; $i < strlen($text); $i++) { // this will print each character of the string on its own line
    echo $text[$i] . '<br>';
}

$text = ['a', 'b', 'c'];
for ($i = 0; $i < count($text); $i++) { // this will print each character of the array on its own line
    echo $text[$i] . '<br>';
} // This might be useful in some cases, although it can have performance issues because it will run count($text) for each iteration

$text = ['a', 'b', 'c'];
$length = count($text);
for ($i = 0; $i < $length; $i++) { // this way we can solve the performance issue by running count($text) only once
    echo $text[$i] . '<br>';
}

// foreach

$programmingLanguages = ['php', 'python', 'javascript'];
foreach ($programmingLanguages as $language) { // this will print each language in a new line
    echo $language . '<br>'; // this loop only works on arrays and objects
}

foreach ($programmingLanguages as $key => $language) { // this will print each language in a new line with key and value
    echo $key . ': ' . $language . '<br>'; // as it has no defined keys, this will print default numeric values for keys.
}

$user = [
    'name' => 'John',
    'email' => 'a@a.com',
    'skills' => ['php', 'python', 'javascript']
];
foreach ($user as $key => $value) {
    echo $key . ': ' . $value . '<br>'; // this will throw an array to string conversion error if you try to print an array
}

foreach ($user as $key => $value) {
    echo $key . ': ' . json_encode($value) . '<br>'; // you can solve array to string conversion error by using json_encode
}
foreach ($user as $key => $value) {
    if(is_array($value)) {
        $value = implode(',', $value);
    }
    echo $key . ': ' . $value . '<br>'; // another way to solve array to string conversion error by using implode
}

foreach ($user as $key => $value) {
    echo $key . ': ';
    if(is_array($value)) {
        foreach ($value as $skill) { // or you can iterate through an array in a loop
            echo $skill . ' - ';
        }
    } else {
        echo $value . '<br>';
    }
}