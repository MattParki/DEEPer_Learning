<?php

$monthNum = date('n'); // 'n' gives us the month as a numeric value (1-12)

if ($monthNum <= 3) {
    echo 'You are in the first quarter of the year';
} elseif ($monthNum <= 6) {
    echo 'You are in the second quarter of the year';
} elseif ($monthNum <= 9) {
    echo 'You are in the third quarter of the year';
} else {
    echo 'By process of elimination, you must be in the last quarter of the year';
}

switch ($monthNum) {
    case 1:
    case 2:
    case 3:
        echo 'You are in the first quarter of the year';
        break;
    case 4:
    case 5:
    case 6:
        echo 'You are in the second quarter of the year';
        break;
    case 7:
    case 8:
    case 9:
        echo 'You are in the third quarter of the year';
        break;
    default:
        echo 'By process of elimination, you must be in the last quarter of the year';
}
