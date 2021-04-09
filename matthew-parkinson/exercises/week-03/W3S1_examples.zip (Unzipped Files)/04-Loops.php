<?php

for ($i = 1; $i < 10; $i++) {
    echo $i;
}

// output: 123456789

$fruits = ['apple', 'pear', 'banana'];

foreach ($fruits as $fruit) {
    echo $fruit;
}

// output: applepearbanana

$string = '';

while (strlen($string) < 5) {
  $string .= 'a';
}

echo $string;

// output: aaaaa

$performAction = false;

do {
    echo 'hello!';
} while ($performAction === true);

// output: hello!
