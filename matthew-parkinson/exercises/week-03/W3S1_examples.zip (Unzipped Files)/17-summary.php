<?php
  class Product {
    public $title;
  }

  if (!empty($_POST)) {
    $product = new Product();
    $product->title = $_POST['title'];
    $serialisedProduct = serialize($product);
    file_put_contents('my-product.txt', $serialisedProduct);

    // ...

    $productFromFile = file_get_contents('my-product.txt');
    $unserialisedProduct = unserialize($productFromFile);

    echo '<pre>';
    var_dump($unserialisedProduct);
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
