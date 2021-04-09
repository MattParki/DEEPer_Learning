
File: exercises/week-02/products-example/index.php
Browser: http://localhost/exercises/week-02/products-example/index.php

<?php
  class Product {
    public $title;
  }

  if (!empty($_POST)) {
    $product = new Product();
    $product->title = $_POST['title'];
    // We could something with the product data...
    echo '<pre>';
    var_dump($product);
    echo '</pre>';
  }
?>

...
<body>
  <h2>New Product</h2>
  <form action="" method="post">
    <label for="title">Title:</label>
    <input type="text" name="title" id="title">

    <button type="submit">Create Product</button>
  </form>
</body>
