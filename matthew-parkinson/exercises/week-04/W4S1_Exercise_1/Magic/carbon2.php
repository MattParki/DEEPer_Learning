<?php

require_once 'setup.php';

use Carbon\Carbon;

$birthday = Carbon::createFromDate(1990, 7, 24);
$age = $birthday->age;

//echo 'Age: ' . $age . '<br>';
//echo 'DoB: ' . $birthday->format('d/M/Y');

$rightNow = Carbon::now();
//echo '<br>';
//echo $rightNow;
$midnightToday = Carbon::today();

$difference = $rightNow->diff($midnightToday);

//var_dump($difference);