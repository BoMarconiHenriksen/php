<?php

// Constants

# Defined at run time. Used with control structures
#define('STATUS_PAID', 'paid');

# Check if constant is defined. Returns 1 if defined
#echo defined('STATUS_PAID');

#echo STATUS_PAID;

# Or use const. Defined at compile time. Used for loops or if else
const car = 'Toyota';

echo car;

$paid = 'PAID';

define('STATUS_' . $paid, $paid);

echo STATUS_PAID;

# Predefined constants https://www.php.net/manual/en/reserved.constants.php
echo PHP_VERSION;

# Magic constant. Vaule can change depending on where they are used https://www.php.net/manual/en/language.constants.magic.php
echo __LINE__;

# Variables variables
# Takes the name of the variable and treats it as the name of the new variable
$foo = 'bar';

$$foo = 'baz';

echo $foo , $bar;
echo $foo , $$foo;
echo $foo , ${$foo};