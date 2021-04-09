<?php

use App\Entity\Product;

require_once '../src/setup.php';

if (!empty($_POST['title']) && !empty($_POST['description'])) {
    $formData = [
        'title' => strip_tags($_POST['title']),
        'description' => strip_tags($_POST['description']),
    ];

    $formProduct = new Product();
    $formProduct->title = $formData['title'];
    $formProduct->description = $formData['description'];

    // Create Product
    $product = $dbProvider->createProduct($formProduct);
    $logger->info('Product created: ' . $product->title);
    header('Location: product.php?productId=' . $product->id);
    exit;
}
// deal with empty submission
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "template_parts/header_includes.php"; ?>
    <title>Create Product</title>
</head>
<body>
<div class="container">
    <?php include 'template_parts/navbar.php'; ?>
    <div class="card p-4">
        <h1>Create Product</h1>
        <form method="post">
            <div class="col-md-6 col-sm-12">
                <label for="title">Title</label>
                <input class="form-control" name="title" id="title" placeholder="Title">
                <label for="description">Description</label>
                <textarea class="form-control" name="description" id="description" placeholder="Description" rows="10"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
</div>
<?php include 'template_parts/footer_includes.php'; ?>
</body>
</html>
