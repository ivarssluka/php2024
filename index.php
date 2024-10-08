<?php

// Working with file system //

$dir = scandir(__DIR__); // scan current directory

echo "<pre>";
print_r($dir); // returns array of files in the directory
echo "</pre>";
echo "<br>";
// you can use loop to loop through the files and decide what to do with them
var_dump(is_file($dir[5])); // Check if it is a file
echo "<br>";
var_dump(is_dir($dir[5])); // Check if it is a directory
echo "<br>";

/** When Removing directory make sure it is empty otherwise you will get a warning */
//mkdir('newdir'); // creates new directory
//rmdir('newdir'); // removes directory

//mkdir('foo/bar', recursive: true); // creates new directory recursively
//rmdir('foo/bar'); // removes directory bar
//rmdir('foo'); // removes directory foo

if (file_exists('index.php')) { // You can check if certain file exists
    echo filesize('index.php'); // returns the size of the file in bytes
} else {
    echo 'File not found';
}
echo '<br>';

// Let's create a file
$newFile = fopen('foo.txt', 'w'); // creates new file with name foo.txt in write mode
$text = "Hello, World!\n Hello, World!";
fwrite($newFile, $text); // writes text to the file
fclose($newFile); // closes the file

if (file_exists('foo.txt')) {
    echo filesize('foo.txt') . '<br>';
//    file_put_contents('foo.txt', 'Hello, Another World!'); // this will overwrite the content of the file
    clearstatcache(); // us this function to clear the cached file size from the previous call
    echo filesize('foo.txt') . '<br>';
} else {
    echo 'File not found';
}
echo '<br>';

// Let's read a file
//if (! file_exists('foobar.txt')) {
//    echo 'File not found';
//    return;
//}
//$file = fopen('foobar.txt', 'r');
//var_dump($file);
//echo '<br>';

if (! file_exists('foo.txt')) {
    echo 'File not found';
    return;
}
$file = fopen('foo.txt', 'r');
var_dump($file);
echo '<br>';

while (($line = fgets($file)) !== false) { // reads the file line by line and stores it in a variable until it reaches the end of the file
    echo $line . '<br>';
}

fclose($file); // Close the file when you're done with it

// Another way of reading a file
$content = file_get_contents('index.php'); // also can be used to read remote files, but not suggested
echo $content;
echo '<br>';

//copy('foo.txt', 'bar.txt'); // copies a file
//unlink('bar.txt'); // removes a file
//rename('foo.txt', 'foobar.txt'); // renames a file

