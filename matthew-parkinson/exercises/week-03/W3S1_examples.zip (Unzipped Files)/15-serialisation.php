<?php
  class Product {
    public $title;
  }

  // Serialised project likely loaded from storage (DB/File etc)
  $serialisedProduct = 'O:7:"Product":1:{s:5:"title";s:10:"My Product";}';

  echo '<pre>' . $serialisedProduct . '</pre>';
?>

<?php
  // The original class of the serialised object must be loaded in scope
  class Product {
    public $title;
  }

  // Serialised project likely loaded from storage (DB/File etc)
  $serialisedProduct = 'O:7:"Product":1:{s:5:"title";s:10:"My Product";}';

  $product = unserialize($serialisedProduct);

  echo '<pre>';
  var_dump($product);
  echo '</pre>';
?>
