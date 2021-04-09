<?php

$string = 'Hello World!';
$int = 30;
$floatingPoint = 3.14159;
$boolean = true;
$array = ['apple', 'pear', 'banana'];

$reassignedVariable = $int; // 30

$concatenatedString = 'Hello' . ' World'; // "Hello World"

$arrayWithStringKeys = [
  'name' => 'John Smith',
  'age' => 25,
];
$example = $arrayWithStringKeys['name']; // John Smith

$arrayWithIntegerKeys = [
  5 => true,
  9 => false,
];
$example = $arrayWithIntegerKeys[5]; // true

// [0 => 'apple', 1 => 'pear', 2 => 'banana']
$arrayWithGeneratedKeys = ['apple', 'pear', 'banana'];
$example = $arrayWithGeneratedKeys[1]; // pear
