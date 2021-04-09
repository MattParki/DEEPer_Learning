<?php

$filename = 'file.txt'; // file contents: "Hello world!"
$file = fopen($filename, 'w+'); // overwrite file contents

fwrite($file, 'Hello files!'); // writes "Hello files!" to the file

fseek($file, 0); // move our cursor back to the start of the file

echo fread($file, filesize($filename)); // output: "Hello files!"

fclose($file); // close the file handle
