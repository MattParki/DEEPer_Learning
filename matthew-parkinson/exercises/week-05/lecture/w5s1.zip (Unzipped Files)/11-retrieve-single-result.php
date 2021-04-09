<?php

require_once 'db.php';

// We're pretending this comes from user input, e.g. $_GET['productId']
$productId = 3;

// ...
$stmt = $dbh->prepare('SELECT id, title FROM product WHERE id = :productId');
$stmt->execute([
  'productId' => 3,
]);
$product = $stmt->fetch(PDO::FETCH_ASSOC);

var_dump($product);
