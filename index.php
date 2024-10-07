<?php

/* Working with arrays */

require 'helpers.php';

// array_chunk(array, $array, int $length, bool $preserve_keys = false): array // default arguments

$items = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5];
prettyPrintArray(array_chunk($items, 2)); // Prints array split in chunks of size 2 without preserving keys
prettyPrintArray(array_chunk($items, 2, true)); // Prints array with preserving keys, when third argument is set to true

// array_combine(array $keys, array $values): array

$array1 = ['a', 'b', 'c']; // Define keys in one array
//$array1[] = 'd'; // if there is no value for the last key, it will result in an error.
$array2 = [1, 2, 3]; // Define values in another array
prettyPrintArray(array_combine($array1, $array2)); // Prints array with combined keys and values


// array_filter(array $array, callable|null $callback = null, int $mode = 0): array

$array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

$even = array_filter($array, fn($value) => $value % 2 == 0);
prettyPrintArray($even); // Prints array with only even numbers
$even = array_filter($array, fn($value) => $value % 2 == 0, ARRAY_FILTER_USE_KEY); // we can pass the third option to specify values passed to callback
prettyPrintArray($even); // Prints array with only even keys
$even = array_values($even); // Returns key indexes to default
prettyPrintArray($even);


$array = [1, null, 3, 0, 5, false, 7, 0.0, [], ''];

$even = array_filter($array); // If we don't pass callback the function will remove all falsy values from array by default
prettyPrintArray($even);

// array_keys(array $array, mixed $search_value, bool $strict = false): array

$array = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => '3'];
$keys = array_keys($array);
prettyPrintArray($keys); // Prints array with only keys

$keys = array_keys($array, 3);
prettyPrintArray($keys); // Prints array with only keys with value 3 ( keys 'c' and 'e' )

$keys = array_keys($array, 3, true);
prettyPrintArray($keys); // Set strict comparison to true to return only keys with value int 3

// array_map(callable $callback, array $array, array ...$arrays): array

$array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$array = array_map(fn($value) => $value * 2, $array);
prettyPrintArray($array); // Similar to array_filter function in PHP this one passes values to callback function and returns new array with new values

$array1 = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4]; // If one array is shorter than missing values are replaced with zero
$array2 = ['f' => 6, 'g' => 7, 'h' => 8, 'i' => 9, 'j' => 10];
$array = array_map(fn($value1, $value2) => $value1 + $value2, $array1, $array2); // Except in this case we can pass multiple arrays
prettyPrintArray($array); // If you are passing more than one array function will not preserve array keys

$array = array_map(null, $array1, $array2);
prettyPrintArray($array); // When passing null as callback function it will join new array from two array values and pair them

// array_merge(array ...$arrays): array

$array1 = [1, 2, 3];
$array2 = [4, 5, 6];
$array3 = [7, 8, 9];
$array = array_merge($array1, $array2, $array3);
prettyPrintArray($array); // Simply appends all arrays into one

$array3 = [1 => 7, 2 => 8, 3 => 9]; // Numeric keys will be overwritten

$array2 = ['a' => 4, 'b' => 5, 'c' => 6]; // String keys will not be overwritten

$array = array_merge($array1, $array2, $array3);
prettyPrintArray($array);

$array3 = [7, 8, 9, 'c' => 10]; // If you have the same string key the later one will overwrite the previous

$array = array_merge($array1, $array2, $array3);
prettyPrintArray($array);

// array_reduce(array $array, callable $callback, mixed $initialValue = null): mixed

$invoiceItems = [
    ['Price' => 100, 'Quantity' => 2, 'desc' => 'Item 1'],
    ['Price' => 200, 'Quantity' => 1, 'desc' => 'Item 2'],
    ['Price' => 300, 'Quantity' => 3, 'desc' => 'Item 3'],
    ['Price' => 400, 'Quantity' => 1, 'desc' => 'Item 4'],
    ['Price' => 500, 'Quantity' => 5, 'desc' => 'Item 5']
];

$total = array_reduce(
    $invoiceItems,
    fn($sum, $item) => $sum + $item['Price'] * $item['Quantity'],// This will iterate through all items and add them up
    0 // You can also add initial value if needed
);

echo 'Total is: ' . $total . '<br>';

// array_search(mixed $needle, array $haystack, bool $strict = false): string|int|false {}

$array = ['a', 'b', 'c', 'D', 'E', 'ab', 'cd', 'b', 'd'];
$key = array_search('b', $array);
echo 'Key is: ' . $key . '<br>'; // Prints key '1', because this function only returns the key of the first matching value.
$key = array_search('D', $array);
echo 'Key is: ' . $key . '<br>'; // Prints key '3', not '8' because search is case-sensitive

// you can check if the array contains a value with in_array()

if (in_array('a', $array)) {
    echo 'Array contains a';
}

// Finding difference between arrays

// array_diff(array $array, $arrays, array ...$arrays): array

$array1 = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5];
$array2 = ['f' => 4, 'g' => 5, 'h' => 8, 'i' => 9, 'j' => 10];
$array3 = ['k' => 3, 'l' => 8, 'm' => 13, 'n' => 14, 'o' => 15];

prettyPrintArray(array_diff($array1, $array2, $array3)); // Only checks **values**, not the keys
// Prints array with values from $array1 that are not in $array2 and $array3

prettyPrintArray(array_diff_key($array1, $array2, $array3)); // Prints array with **keys** from $array1 that are not in $array2 and $array3;

prettyPrintArray(array_diff_assoc($array2, $array1, $array3)); // Checks key => value pairs
// Prints array with values from $array2 that are not in $array1 and $array3
// Important: Order in which you pass arrays matters - first passed array will get compared with the rest


// Sorting arrays
// asort(array &$array, int $flags = SORT_REGULAR)

$array = ['d' => 4, 'a' => 2, 'c' => 3, 'b' => 1];
prettyPrintArray($array); // Prints array in the order it was passed
asort($array); // Sorts array in ascending order by value
prettyPrintArray($array);
ksort($array); // Sorts array in ascending order by key
prettyPrintArray($array);
usort($array, fn($a, $b) => $b <=> $a); // Sorts array in descending order using 'spaceship' operator
prettyPrintArray($array);
usort($array, fn($a, $b) => $a <=> $b); // Sorts array in ascending order
prettyPrintArray($array);

$array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
list($first, $second, $third, $fourth, $fifth, $sixth, $seventh, $eighth, $ninth, $tenth) = $array;
// We can destruct variables from an array using list
echo $first . '<br>';
echo $tenth . '<br>';

// Alternative syntax for the same task using array destructuring without list
[$first, $second, $third, $fourth, $fifth, $sixth, $seventh, $eighth, $ninth, $tenth] = $array;
echo $seventh . '<br>';
echo $ninth . '<br>';
