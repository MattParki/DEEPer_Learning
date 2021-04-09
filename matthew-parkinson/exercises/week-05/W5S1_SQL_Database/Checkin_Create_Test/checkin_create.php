<?php

require_once '../W5E1_Initech/db_Initech.php';

$productAddedSuccess = false;
//var_dump($productAddedSuccess);
if (!empty($_POST)) {
    $newProductTitle = $_POST['title'];
//var_dump($newProductTitle);
    if (!empty($newProductTitle)) {

        $stmt = $dbh->prepare('INSERT INTO product (title) VALUES (:title)');

        $stmt->execute([
            'title' => $newProductTitle,
        ]);
//var_dump($stmt);
        if($stmt->rowCount() > 0) {
            $productAddedSuccess = true;

        }
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<meta name="viewport" content="width=device-width, initial-scale=1.0">


<head>
    <title>Form Submit</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>


<body class="container pt-4">
<form action="" method="post">
    <?php if ($productAddedSuccess): ?>
        <p class="alert alert-success">Product added Successfully!</p>
    <?php endif; ?>


    <div class="form-group">
        <label for="product-title">Title</label>
        <input type="text" name="title" id="product-title" class="form-control">
    </div>

    <button type="submit" class="btn btn-success">Save Product</button>

</form>








<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>