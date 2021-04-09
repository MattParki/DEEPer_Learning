
// ----------------------------------------
// index.php

<?php
  require_once 'Product.php';

  $product = new Product();
  // ...
?>


// ----------------------------------------
// Product.php

<?php
  class Product {
    public $title;
  }
?>
