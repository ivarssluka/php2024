<?php

declare(strict_types=1);

require_once '../Transaction.php';
// Classes & Objects

$amount = (new Transaction(100, 'Transaction 1'))
    ->addTax(8)
    ->applyDiscount(10)
    ->getAmount();

var_dump($amount);
echo "<br/>";

$string = '{"a":1, "b":2, "c":3}';
$array = json_decode($string);
var_dump($array->a);

echo "<br/>";

$object = new \stdClass();
$object->a = 1;
$object->b = 2;
var_dump($object);

echo "<br>";

$array = [1, 2, 3];
var_dump($array);
echo "<br>";

$array = [1, 2, 3];
$object = (object) $array;

var_dump($object->{1});
echo "<br>";


var_dump((object) 1);
echo "<br>";

$object = (object) 1;
var_dump($object->scalar);
echo "<br>";

