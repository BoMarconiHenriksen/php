<?php

// functions. return type is int

function foo(): int {
  return 1;
};

// void do not return anything
function fooTwo(): void {
  return;
};

// return int or null
function fooThree(): ?int {
  return 3;
};

// return int or float
function foofour(): int|float {
  return 3.2;
};

// return int, array or float
function fooFive(): int|float|array {
  return [3.2];
};

// return multiple data types
function fooSix(): mixed {
  return [3.2];
};

var_dump(foo());