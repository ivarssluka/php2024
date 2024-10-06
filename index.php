<?php

/* Match expression */

$paymentStatus = 1;

switch ($paymentStatus) {
    case 1:
        echo "Payment is approved <br>";
        break;
    case 2:
        echo "Payment is pending <br>";
        break;
    case 3:
        echo "Payment is declined <br>";
        break;
    default:
        echo "Payment status unknown <br>";
        break;
}

match ($paymentStatus) {
    1 => print "Payment is approved <br>",
    2 => print "Payment is pending <br>",
    3 => print "Payment is declined <br>",
    default => print "Payment status unknown <br>"
};

$paymentStatusDisplay = match ($paymentStatus) {
    1 => print "Payment is approved <br>",
    2 => print "Payment is pending <br>",
    3 => print "Payment is declined <br>",
    default => print "Payment status unknown <br>"
};
echo $paymentStatusDisplay . "<br>"; // Prints 1 because of print statement

// You don't need a break statement using the match expression


$paymentStatusDisplay = match ($paymentStatus) {
    1 => "Payment is approved <br>",
    2 => "Payment is pending <br>",
    3 => "Payment is declined <br>",
    0 => "Payment status unknown <br>"
};
echo $paymentStatusDisplay . "<br>"; // Prints the assigned string value;


$paymentStatusDisplay = match ($paymentStatus) {
    1 => "Payment is approved <br>",
    2,3 => "Payment is pending <br>", // You can use multiple values in the match expression
    0 => "Payment status unknown <br>"
};
echo $paymentStatusDisplay . "<br>"; // Prints the assigned string value;

$paymentStatus = 4;
/*
    $paymentStatusDisplay = match ($paymentStatus) {
    1 => "Payment is approved <br>",
    2,3 => "Payment is pending <br>",
    0 => "Payment status unknown <br>"
};
echo $paymentStatusDisplay . "<br>"; // This will result in fatal error, because you need to specify all outcomes for the match expression*/

$paymentStatusDisplay = match ($paymentStatus) {
    1 => "Payment is approved <br>",
    2,3 => "Payment is pending <br>",
    0 => "Payment status unknown <br>",
    default => "Payment status unknown <br>" // Adding default will fix the fatal error
};
echo $paymentStatusDisplay . "<br>";

$paymentStatus = '1';

$paymentStatusDisplay = match ($paymentStatus) { // Match uses strict type comparison that's why this will result in default value
    1 => "Payment is approved <br>",
    2,3 => "Payment is pending <br>",
    0 => "Payment status unknown <br>",
    default => "Payment status unknown <br>"
};
echo $paymentStatusDisplay . "<br>";