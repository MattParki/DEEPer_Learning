<?php

// Includes/loads the specified file and runs/evaluates it
// Emits a PHP Warning if not found
include 'path/to/file.php';

// Same as include, however if this line runs more than once the file will
// only be loaded once
include_once 'path/to/file.php';

// Same as include, but emits a PHP Error if not found
require 'path/to/file.php';

// Same as require_once, but emits a PHP Error if not found
require_once 'path/to/file.php';
