<?php

echo 'Hello World';
echo('Hello');

# Concatonate. Can't be done with print. Echo is marginal faster than print.
echo 'Hello', '', 'world';

# Escape
echo 'Joe\'s Invoice';
echo "'Joe's Invoice'";

# print has a return value of 1
# This means print can be used within expression while echo can't
echo print 'Hello World With Print!';
print('Hello');

# Variables always start with letter or _. Can't have special charaters.
$name = 'Bo';
echo $name;

# Variables are assigned by value
$x = 1;
# Assign value by reference to change y when x changes
$y = &$x;

$x = 3;
echo $y;

# With single quotes text is printed as is
$firstName = 'Bo';
echo 'Hello $firstName'; # Result: Hello $firstName

# Echo variables with double quotes
$firstName = 'Bo';
echo "Hello $firstName"; # Result: Hello Bo

# Echo variables with double quotes. Some use this syntax
$firstName = 'Bo';
echo "Hello {$firstName}"; # Result: Hello Bo

# Concation operator
echo 'Hello ' . $firstName;