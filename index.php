<?php

/** require / require_once / include / include_once */
//
//include 'file.php'; // include will result in warning but will not stop code execution
//include 'file.php'; // this will run as many times as it is included
//echo 'Hello, World! <br>' ;
//
//
//require 'file.php'; // require will result in fatal error and stop execution
//echo 'Hello, World! <br>' ;

//require_once 'file.php';
//$x++;
//echo $x . '<br>'; // prints x as 6
//
//require_once 'file.php'; // this will only run once, that is the main difference
//echo $x . '<br>'; // prints x as 6
//echo 'Hello, World! <br>' ;

//require 'file.php';
//$x++;
//echo $x . '<br>'; // prints x as 6
//
//require 'file.php';
//echo $x . '<br>'; // prints x as 5 because we require it again with default value
// That's why you want to use require_once to avoid variable declaration errors or overriding values.

ob_start();
include './partials/nav.php';
$nav = ob_get_clean();

$nav = str_replace('About', 'About Us', $nav); // replaces About with About Us

echo $nav;