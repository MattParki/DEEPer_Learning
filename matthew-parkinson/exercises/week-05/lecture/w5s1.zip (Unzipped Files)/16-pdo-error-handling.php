<?php

// In db.php
$dbh = new PDO(
    'mysql:host=mysql;dbname=lecture',
    $username,
    $password
);

// This line enables exceptions on error
$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

try {
  $stmt = $dbh->prepare('This is not valid SQL');
  $stmt->execute();
} catch (PDOException $e) {
  // Appropriate error handling, logging etc
  echo 'Sorry, something went wrong!';
}
