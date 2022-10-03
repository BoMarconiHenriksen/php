<?php

// null

// null constant
$x = null;
var_dump($x); // result: null
var_dump(is_null($x)); // result: true
var_dump($x === null); // true

// variable not defined
var_dump($y); // undefined but value set to null
var_dump(is_null($y)); // result: undefined but true

// Set variable to null
$b = null;

var_dump((string) $b); // result an empty string: ""
var_dump((int) $b); // result: 0
var_dump((bool) $b); // result: false
var_dump((array) $b); // result empty array: array (0) {}