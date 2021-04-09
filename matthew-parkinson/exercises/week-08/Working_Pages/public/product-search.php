<?php

use App\Entity\Product;

require_once '../src/setup.php';

// Search Term
$searchTerm = '';
if (isset($_POST['search'])) {
    $searchTerm = $_POST['search'];
}

$stmt = $dbh->prepare('SELECT id, title FROM product WHERE title LIKE :searchTerm');
$stmt->execute([
    'searchTerm' => '%' . $searchTerm . '%'
]);

$products = $stmt->fetchAll(PDO::FETCH_CLASS, Product::class);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'template_parts/header_includes.php' ?>
    <title>Product Search</title>
</head>
<body>
<div class="container">
    <h1>Products!</h1>
    <form method="post">
        <div class="form-group">
            <label for="search">Search:</label>
            <input type="text" id="search" name="search" value="<?= $searchTerm ?>" class="form-control">
            <input type="submit">
        </div>
    </form>
    <table class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Title</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($products as $product): ?>
            <tr>
                <td><a href="product.php?productId=<?= $product->id; ?>"><?= $product->id; ?></a></td>
                <td><?= $product->title ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>
</body>
</html>
