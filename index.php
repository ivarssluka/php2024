<?php

/** Basic php syntax
 *
 * <?php
 *
 * php code block goes here
 *
 * ?>
 */

/** php index.php - This command runs the code in terminal */

echo "Echo with double quotes" . "<br>";
print "Print with double quotes" . "<br>";
echo 'Echo with single quotes' . '<br>';
print 'Print with single quotes' . '<br>';
echo('Echo with parenthesis' . '<br>');
print('Print with parenthesis' . '<br>');


print 'Print returns value' . '<br>';
echo print 'Echo print returns print value' . '<br>';

/** print echo 'Print echo will not work' . '<br>'; Results in syntax error */

echo 'Echo concatination' . ' with' . ' . dot' . ' works' . '<br>';
print 'Print concatination' . ' with' . ' . dot' . ' works' . '<br>';
echo 'Echo concatination', ' with', ' , comma', ' works', '<br>';

/** print 'Print concatination' , ' with' , ' , comma' , ' doesn't work' , '<br>'; Results in syntax error */

/** echo 'Ivar's' . '<br>'; Syntax error because of single quote */

/**  $name = 'Ivar's'; - Syntax error because of single quote */

echo "Ivar's" . '<br>'; // Avoid syntax error by using double quotes
echo 'Ivar\'s' . '<br>'; // Use single quotes and backslash to avoid syntax error
echo "Prefer 'echo' over 'print' in most cases as it is quicker and more efficient than print" . '<br>';


/** Variables start with $ symbol
 * Variables cannot start with number or contain special characters
 * $n&^ame = 'Ivar's'; - Syntax error
 * $123name = 'Ivar's'; - Syntax error
 * $_2123name = 'Ivar's'; - will work because of the underscore
 */

/**
 *  You cannot assign value to $this variable as it is a reserved keyword and will result in fatal error if you try
 *  $this = 'value';
 */

$_1st_name = "Ivar's robot";
echo "Hello $_1st_name" . '<br>';

/** Variables in php are assigned by value */
$x = 1;
$y = $x;
$x = 2;
echo "x = " . $y . '<br>'; // Outputs 1

/** Variables in php are assigned by reference */
$x = 1;
$y = &$x;
$x = 2;
echo "x = " . $y . '<br>'; // Outputs 2

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1><?php echo "Hello World"; ?></h1>
<h1><?= "Hello World" // shorthand for '<?php echo' is '<?='  ?></h1>
<h1><?php echo "Hello World" //you can skip semicolon on single line or last line of php code?></h1>
</body>
</html>

<?php

// Single line comment

# Single line comment

/*
Multi
line
comment
*/

///*
//Do not nest multiline comments as it will result in syntax error
///* Another multiline comment nested */ <- like this
//*/

/**
 * Doc block comment is used mostly for documentation
 */


# comment on the last line will work before closing php tag, but not after ?> anything after php closing tag '?>' will be printed even if the last line is commented before php closing tag.

