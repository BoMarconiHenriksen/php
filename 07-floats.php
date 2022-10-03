<?php

// https://floating-point-gui.de/

$a = 12.5;
echo $a;

$b = 1_000_000.5;
echo $b;

// cast int to float
$a = 5;
var_dump((float) $a);