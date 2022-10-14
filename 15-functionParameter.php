<?php

// function parameters

declare(strict_types=1);

// function foo(int $x, int $y) {
//   return $x * $y;
// };

function foo(int|float $x, int|float $y) {
  return $x * $y;
};

echo foo(5.0, 10);