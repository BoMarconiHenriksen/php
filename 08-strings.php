<?php

// $firstName = 'Will';
//$lastName = "$firstName Smith";
// echo $lastName;

// $firstName = 'Will';
// $lastName = "${firstName} Smith"; // Only in double quotes you can have variables
// echo $lastName;

$firstName = 'Will';
$lastName = 'Smith';

$name = $firstName . ' ' . $lastName;

echo $name . '<br />';

// Access letters in $name
echo $name[1]; // result: i
echo $name[-2]; // result: t

// Change letters
$name[1] = 'I';
echo $name; // result WIll Smith

// How many letters are there in string?
var_dump($name); // Result: 10

// Heredoc (treat string as double quotes) - do not need to escape
$x = 5;
$y = 5;

$text = <<<TEXT
Line 1 $x
Line 2 $y
Line 3 ' "
TEXT;

echo '<br />';
echo nl2br($text);

// Nowdocs (treats as single quotes)
$textTwo = <<<'TEXT'
Line 1 $x
Line 2 $y
Line 3 ' "
TEXT;

echo '<br />';
echo nl2br($textTwo);