<?php

/* Date and Time */

echo time() . '<br>'; // unix timestamp in seconds from (1970-01-01 00:00:00 UTC)

$currentTime = time();
echo $currentTime . '<br>';
echo $currentTime + 5 * 24 * 60 * 60 . '<br>'; // Adding 5 days in seconds
echo $currentTime - 60 * 60 * 24 . '<br>'; // Subtracting 1 day in seconds

echo date('Y-m-d H:i:s') . '<br>'; // Date and time in YYYY-MM-DD HH:MM:SS
echo date('l jS \of F Y h:i:s A') . '<br>'; // Day, date, month, year, time
echo date('m/d/Y g:ia') . '<br>'; // Month, date, year, time
echo date('l jS \of F Y h:i:s A', $currentTime + 5 * 24 * 60 * 60) . '<br>'; // Formatted date and time five days in the future

// By default date() and time() are in GMT time zone defined in PHP configuration file
echo date_default_timezone_get() . '<br>';
date_default_timezone_set('Europe/Riga');
echo date('l jS \of F Y h:i:s A') . '<br>'; // Day, date, month, year, time
echo date_default_timezone_get() . '<br>';

echo strtotime('2024-10-07 16:00:00') . '<br>'; // Unix timestamp in seconds
echo date('Y-m-d H:i:s', strtotime('2024-10-07 16:00:00')) . '<br>'; // You can format that as well
echo date('Y-m-d H:i:s', strtotime('+5 days')) . '<br>'; // You can pass in the relative formats like this
echo date('Y-m-d H:i:s', strtotime('tomorrow')) . '<br>'; // You can pass in the relative formats like this
echo date('Y-m-d H:i:s', strtotime('second friday of this month')) . '<br>'; // You can pass in the relative formats like this

$date = date('Y-m-d H:i:s', strtotime('last day of this month'));
echo '<pre>';
print_r(date_parse($date)); // get array of details about the date and time
echo '</pre>';