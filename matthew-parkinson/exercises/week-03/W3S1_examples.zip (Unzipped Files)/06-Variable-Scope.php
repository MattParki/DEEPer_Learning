<?php

$foo = 'bar';

function myFunction() {
    $bar = 42;

    echo $foo;  // doesn't work
    echo $bar;  // works
}

echo $foo;  // works
echo $bar;  // doesn't work
