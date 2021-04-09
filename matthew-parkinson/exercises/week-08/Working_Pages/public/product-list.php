<?php

require_once '../src/setup.php';

// Search Term
$searchTerm = '';
if (isset($_POST['search'])) {
    $searchTerm = $_POST['search'];
}

$products = $dbProvider->getProducts($searchTerm);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'template_parts/header_includes.php' ?>
    <title>Product List</title>
</head>
<body>
<div class="container">
    <?php include 'template_parts/navbar.php' ?>
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
<?php include 'template_parts/footer_includes.php'; ?>
</body>
</html>
