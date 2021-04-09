<?php

require_once 'db.php';

$productAddedSuccess = false;

if (!empty($_POST)) {
    $newProductTitle = $_POST['title'];

    $stmt = $dbh->prepare('INSERT INTO product (title) VALUES (:title)');

    $stmt->execute([
        'title' => $newProductTitle,
    ]);

    $productAddedSuccess = true;
}

?>

<!doctype html>
<html>
<head>
    <title>Full Page</title>
    <link rel="stylesheet"
          href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
          crossorigin="anonymous"
    >
</head>
<body class="container pt-4">
    <form action="" method="post">

        <?php if ($productAddedSuccess): ?>
        <p class="alert alert-success">Product added successfully!</p>
        <?php endif; ?>

        <div class="form-group">
            <label for="product-title">Title</label>
            <input type="text" name="title" id="product-title" class="form-control">
        </div>

        <button type="submit" class="btn btn-success">Save Product</button>
    </form>
</body>
</html>
