
<?php
  class Product {
    public $title = 'Macbook Pro';
    public $isInStock = true;
    public $reviews = ['Very good!', 'Better than Windows!'];
  }

  $product = new Product(); // e.g. loaded from a file
?>

// Echo a variable
<?= $myVariable; ?>

// Conditional
<?php if ($booleanVariable): ?>
  <p>Output If True</p>
<?php elseif ($anotherBoolean): ?>
  <p>Output If True</p>
<?php else: ?>
  <p>Output Else</p>
<?php endif ?>

// Foreach
<?php foreach ($arrayVariable as $item): ?>
  <?= $item; ?>
<?php endforeach ?>

<body>
  <h1>
    <?= $product->title; ?>
  </h1>

  <p>
    <?php if ($product->isInStock): ?>
      Product is in stock!
    <?php else: ?>
      Product is out of stock!
    <?php endif ?>
  </p>

  <h2>Reviews</h2>
  <ul>
    <?php foreach ($product->reviews as $review): ?>
      <li><?= $review; ?></li>
    <?php endforeach ?>
  </ul>

</body>
