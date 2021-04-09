<?php

class Product
{
    public $title;
}


//Checking if the POST variable is not empty before we do any processing
if (!empty($_POST)) {
    //Creating the new product gives us a working product
    $product = new Product();
    //This will hydrate our product object with the form submission
    $product->title = $_POST['title'];

    //Store this into a file and before we do that we serialise it
    $serialisedProduct = serialize($product);
    //put the contents into this file, pass in the serialised product
    file_put_contents('my-product.txt', $serialisedProduct);
    //Now we can unserialise this and place back into browser
    //Prints this to the screen
   $message = 'Product created <br>';

    //This will get the files from the actual file we put the serialised product in
    $productFromFile = file_get_contents('my-product.txt');
//    var_dump($productFromFile);
    //This is unserialising the product from the productfile
    $unserialisedProduct = unserialize($productFromFile);
    //this is the defined variable we can use to insert into the html to be displayed
    $message .= $unserialisedProduct->title;




}











?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Create Product</title>
</head>
<body>
<h2>New Product</h2>
<!-- isset.. or 'is set' is a test for checking if the inside parameter is set or not -->
    <?php if(isset($message)) : ?>
    New Product: <?= $message ?>
    <?php endif; ?>


<form action="" method="POST">
    <div>
        <label for="title">Title:</label>
        <input name="title" type="text" id="title">
    </div>
    <div>
        <button type="submit">Create Product</button>
    </div>
</form>

</body>
</html>


