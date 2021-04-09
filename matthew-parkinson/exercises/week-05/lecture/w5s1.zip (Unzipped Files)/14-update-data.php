<?php

require_once 'db.php';

// We're pretending this comes from user input, e.g. $_POST['id']
$productId = 3;

$stmt = $dbh->prepare('DELETE FROM product WHERE id = :id');

$stmt->execute([
    'id' => $productId,
]);

// We can optionally check how many rows were affected by the statement
echo '# Rows affected: ' . $stmt->rowCount(); // 1
