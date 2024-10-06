<?php

/* Arrays */

$programmingLanguage1 = "PHP";
$programmingLanguage2 = "JavaScript";
$programmingLanguage3 = "Python";

$programmingLanguages = ['PHP', 'JavaScript', 'Python']; // Brackets are modern and easier to read syntax
$programmingLanguages = array('PHP', 'JavaScript', 'Python'); // you can use single quotes or double quotes

// Arrays are indexed starting from 0
echo $programmingLanguages[0]; // PHP
echo '<br>';
$name = 'John';
echo $name[0]; // J
echo '<br>';
echo $name[-1]; // n
echo '<br>';

echo $programmingLanguages[-1]; // You cannot do this with arrays
echo '<br>';

$programmingLanguages[3] = 'Java'; // You can add new elements
var_dump($programmingLanguages);
echo '<br>';

var_dump(isset($programmingLanguages[3])); // You can check if an element exists
echo '<br>';

var_dump(empty($programmingLanguages[3])); // You can check if an element is empty
echo '<br>';

echo count($programmingLanguages); // You can count the number of elements
echo '<br>';

$programmingLanguages[2] = 'Ruby'; // You can change an elements in an array
echo $programmingLanguages[2]; // Ruby
echo '<br>';

print_r($programmingLanguages); // You can print the array
echo '<br>';

echo '<pre>';
print_r($programmingLanguages);
echo '</pre>'; // You can print the array in a readable format by surround it with <pre></pre> tags
echo '<br>';

$programmingLanguages[] = 'C#'; // You can add an element at the end of the array
echo '<pre>';
print_r($programmingLanguages);
echo '</pre>';
echo '<br>';

array_push($programmingLanguages, 'C', 'GO', 'Kotlin'); // You can push elements at the end of the array
echo '<pre>';
print_r($programmingLanguages);
echo '</pre>';
echo '<br>';

// Associative arrays
$programmingLanguage = [
    'php' => 8.0,
    'python' => 3.8,
    'javascript' => 6.0
];
echo '<pre>';
print_r($programmingLanguage);
echo '</pre>';
echo '<br>';

$programmingLanguage['go'] = 1.18; // You can add an element at the end of the array
echo '<pre>';
print_r($programmingLanguage);
echo '</pre>';
echo '<br>';

$newLanguage = 'go';
$programmingLanguage[$newLanguage] = 1.18; // Alternative way of adding an element
echo '<pre>';
print_r($programmingLanguage);
echo '</pre>';
echo '<br>';

// Multidimensional arrays

$languages = [
    'php' => [
        'creator' => 'Rasmus Lerdorf',
        'extension' => 'php',
        'website' => 'https://www.php.net/',
        'isOpenSource' => true,
        'versions' => [
            ['version' => 7.4, 'released' => '2021-11-01'],
            ['version' => 8, 'released' => '2020-11-01']
        ],
    ],
    'python' => [
        'creator' => 'Guido van Rossum',
        'extension' => 'py',
        'website' => 'https://www.python.org/',
        'isOpenSource' => true,
        'versions' => [
            ['version' => 3.8, 'released' => '2021-11-01'],
            ['version' => 3.9, 'released' => '2020-11-01']
        ],
    ],
];

echo '<pre>';
print_r($languages);
echo '</pre>';
echo '<br>';

echo $languages['php']['versions'][0]['version']; // PHP assigns numeric values by default so this will be 7.4
echo '<br>';
echo $languages['php']['versions'][1]['released']; // PHP assigns numeric values by default so this will be 2020-11-01
echo '<br>';
echo $languages['php']['versions'][3]['version']; // This will result in error as there is no value at index 3
echo '<br>';

$array = [0 => 'foo', 1 => 'bar', 1 => 'baz']; // You can overwrite values
print_r($array);
echo '<br>';

$array = [true => 'a', 1 => 'b', 1 => 'c', 1.8 => 'd']; // You will get a warning, but the value will be 'd'.
print_r($array);
echo '<br>';

$array = [true => 'a', 1 => 'b', 1 => 'c', 1.8 => 'd', null => 'e']; // null as key is cast to and empty string
print_r($array);
echo '<br>';
echo $array[''] . '<br>';
echo $array[null] . '<br>';
echo '<br>';

$array = ['a', 'b', 'c', 'd', 'e']; // Again automatically converts to 0, 1, 2, 3, 4
print_r($array);
echo '<br>';
echo $array[0] . '<br>';
echo $array[1] . '<br>';
echo $array[2] . '<br>';
echo $array[3] . '<br>';
echo $array[4] . '<br>';
echo '<br>';

$array = ['a', 'b', 50 => 'c', 'd', 'e'];
print_r($array);
echo '<br>';
echo $array[0] . '<br>';
echo $array[1] . '<br>';
echo $array[2] . '<br>'; // this will be undefined
echo $array[50] . '<br>';
echo $array[51] . '<br>';
echo $array[52] . '<br>';
echo '<br>';

// Removing elements from an array

echo array_pop($array) . '<br>'; // Removes the last element
print_r($array);
echo '<br>';

echo array_shift($array) . '<br>'; // Removes the first element and reindexes the array
print_r($array);
echo '<br>';

$array = ['a', 'b', 50 => 'c', 'foo' => 'd', 'e'];
echo array_shift($array) . '<br>'; // non-numeric keys are not reindexed
print_r($array);
echo '<br>';

$array = ['a', 'b', 'c', 'd', 'e'];
unset($array[2]); // Removes the element at index 2 without reindexing
print_r($array);
echo '<br>';

$array = ['a', 'b', 'c', 'd', 'e'];
unset($array[0], $array[2]); // Removes the elements at index 0 and 2 without reindexing
print_r($array);
echo '<br>';

$array = [1, 2, 3, 4, 5];
unset($array[0], $array[1], $array[2], $array[3], $array[4]); // unset all elements but remains the highest index
$array[] = 1; // So this becomes element with index 5
print_r($array);
echo '<br>';


$x = 5;
var_dump((array) $x); // $x is cast to an array
echo '<br>';

$x = 'foo';
var_dump((array) $x); // $x is cast to an array
echo '<br>';

$x = null;
var_dump((array) $x); // $x is cast to an empty array
echo '<br>';

$array = ['a' => 1, 'b' => null];
var_dump(array_key_exists('a', $array)); // True
echo '<br>';
var_dump(isset($array['b'])); // False because of the null
echo '<br>';