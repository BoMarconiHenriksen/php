<?php

// Arrays
$programmingLanguages = ['PHP', 'Java', 'Python']; // use double quotes if you need variable

// Old way
// $programmingLanguages = array('PHP', 'Java', 'Python');

echo $programmingLanguages[1]; // Result: Java

echo $programmingLanguages[3]; // Result: null with undefined warning

// Check if exist
var_dump(isset($programmingLanguages[0])); // Result: true
var_dump(isset($programmingLanguages[3])); // Result: false

// Change index 1
// $programmingLanguages[1] = 'C++';

echo '<pre>';
print_r($programmingLanguages);
echo '</pre>';

// Number of elements in array
echo count($programmingLanguages); // Result: 3
echo '<br />';

// Add new element
$programmingLanguages[] = 'C++';

echo '<pre>';
print_r($programmingLanguages);
echo '</pre>';

// push to array
array_push($programmingLanguages, 'C', 'GO');
echo '<pre>';
print_r($programmingLanguages);
echo '</pre>';

// Create array with custom keys. php and phyton is the keys in this example. Key has to be int or string
$customKeys = [
  'php' => '8.0',
  'python' => '3.9'
];

echo '<pre>';
print_r($customKeys);
echo '</pre>';

// print the value of the key
echo $customKeys['php'];

// Add key value pair
$customKeys['go'] = '1.15';

echo '<pre>';
print_r($customKeys);
echo '</pre>';

// With variables
$newLanguage = 'C';
$customKeys[$newLanguage] = '7.76';

echo '<pre>';
print_r($customKeys);
echo '</pre>';

// Multidimensionel arrays
$multidimensionelArray = [
  'php' => [
    'creater' => 'Rasmus Lerdorf',
    'extension' => '.php',
    'website' => 'www.php.net',
    'isOpenSource' => true,
    'versions' => [
      ['version' => 8, 'releaseDate' => 'Nov 26, 2020'],
      ['version' => 7.4, 'releaseDate' => 'Nov 28, 2019']
    ],
  ],
  'python' => [
    'creater' => 'GuidoVan Rossum',
    'extension' => '.py',
    'website' => 'www.python.org',
    'isOpenSource' => true,
    'versions' => [
      ['version' => 3.9, 'releaseDate' => 'Okt 5, 2020'],
      ['version' => 3.8, 'releaseDate' => 'Okt 14, 2019']
    ],
  ],
];

echo '<pre>';
print_r($multidimensionelArray);
echo '</pre>';

// access php and then website. Use the keys
echo $multidimensionelArray['php']['website'];
echo '<br />';

echo $multidimensionelArray['php']['versions'][0]['releaseDate'];
echo '<br />';

// Wrong -> value is null
// echo $multidimensionelArray['php']['versions'][3]['releaseDate'];

// Remove element from array
// pop removes last element
$array = ['a', 'b', 'c', 'd', 'e'];

echo array_pop($array); // result: ['a', 'b', 'c', 'd']
echo '<br />';
print_r($array);
echo '<br />';

// shift removes first element. Array is reindexted
echo array_shift($array); // result: ['b', 'c', 'd']
echo '<br />';
print_r($array);

// unset - remove index number from array - Array is not reindexed
// unset($array); // Result: Destroy/delete array
unset($array[0]); // Result: ['c', 'd']

echo '<br />';
print_r($array);

unset($array[1], $array[2]); // Result: []

echo '<br />';
print_r($array);

// unset - first remove all and then add new element does not start at 0 but continue
$numbers = [ 1, 2, 3];

unset($numbers[0], $numbers[1], $numbers[2]); // result: []
print_r($numbers);
echo '<br />';

$numbers[] = 1; // Result: index 3
print_r($numbers);
echo '<br />';

// Cast to array
$x = 5;
var_dump((array) $x);
echo '<br />';

$x = null;
var_dump((array) $x); // Result: empty array
echo '<br />';

// Check if key exist in array
$keyExist = ['a' => 1, 'b' => null];

var_dump(array_key_exists('a', $keyExist)); // Result: true
echo '<br />';
var_dump(array_key_exists('b', $keyExist)); // Result: true
echo '<br />';

// Check if key exist and has a value
var_dump(isset($keyExist['a'])); // Result: true - key exist and is not null
echo '<br />';
var_dump(isset($keyExist['b'])); // Result: false