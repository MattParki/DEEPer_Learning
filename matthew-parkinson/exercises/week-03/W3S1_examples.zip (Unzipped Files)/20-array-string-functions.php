<?php

$string = 'hello world!';
$array = ['apple', 'orange', 'pear'];
$array2 = ['plum', 'banana'];

// https://www.php.net/manual/en/ref.strings.php
$leftTrimmedString = ltrim($string, 'H') // 'ello World'
$explodedString = explode(' ', $string); // ['hello', 'world']
$stringLength = strlen($string); // 12
$upperCasedFirst = ucfirst($string); // 'Hello world'

// https://www.php.net/manual/en/ref.array.php
$reversedArray = array_reverse($array);
$mergedArrays = array_merge($array, $array2);
$lastElement = array_pop($array);
$firstElement = array_shift($array);
$arrayLength = count($array); // 3
$mappedArray = array_map(function ($value) {
  return 'Foo: ' . $value;
}, $array);
