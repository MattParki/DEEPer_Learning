<?php

require_once 'db.php';

// We're pretending this comes from user input, e.g. $_POST['title']
$newProductTitle = 'New Product Title';

$stmt = $dbh->prepare('INSERT INTO product (title) VALUES (:title)');

$stmt->execute([
  'title' => $newProductTitle,
]);

// We can optionally check how many rows were affected by the statement
echo '# Rows affected: ' . $stmt->rowCount(); // 1
