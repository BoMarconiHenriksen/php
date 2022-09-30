<?php

# Data Types and TypeCasting

# 4 Scalar Types
  # bool
  $completed = true;

  # int
  $score = 75;

  # float
  $price = 0.99;

  # string
  $greeting = 'Hello Bo';

  echo $completed . '<br>';
  echo $score . '<br>';
  echo $price . '<br>';
  echo $greeting . '<br>';

  echo gettype($completed) . '<br>';
  echo gettype($score) . '<br>';
  echo gettype($price) . '<br>';
  echo gettype($greeting) . '<br>';

  var_dump($completed) . '<br>';
  var_dump($score) . '<br>';
  var_dump($price) . '<br>';
  var_dump($greeting) . '<br>';

# 4 Compound Types
  # array
  $companies = [1, 2, 3, 0.5, -9.2, 'A', 'b', true];
  print_r($companies);

  # object
  # callable
  # iterable

# 2 Special Types
  # resource
  # null

# Type joggling - cast a string to int - https://www.php.net/manual/en/language.types.type-juggling.php
# You can use strict mode if you pass another type than int it will throw an error
#declare(strict_types=1);
function sum(int $x, int $y) {
  var_dump($x, $y);
  echo '<br />';
  return $x + $y;
}

echo sum(2, '3');

# Type Casting https://www.php.net/manual/en/types.comparisons.php
echo '<br />';
$x = (int)'5';

var_dump($x);