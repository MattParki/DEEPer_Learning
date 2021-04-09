<?php

$username = 'root';
$password = 'root';

try {
    $dbh = new PDO(
        'mysql:host=mysql;dbname=lecture',
        $username,
        $password
    );
} catch (PDOException $e) {
    // We could log this!
    die('Unable to establish a database connection');
}