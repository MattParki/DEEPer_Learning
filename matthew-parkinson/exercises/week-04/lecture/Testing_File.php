<?php

require_once 'carbon.php';

//require_once 'vendor/autoload.php';
//use Carbon\Carbon;


class checkInData
{
    public $title;
    public $name;
    public $rating;
    public $review;
    public $timeSubmit;


}

//$timeNow = Carbon::now();

//Checking if the POST variable is not empty before we do any processing
if (!empty($_POST)) {
    //Creating the new product gives us a working product
    $checkInData = new checkInData();
    //This will hydrate our product object with the form submission
    $checkInData->title = $_POST['title'];
    $checkInData->name = $_POST['name'];
    $checkInData->rating = $_POST['rating'];
    $checkInData->review = $_POST['review'];
    $checkInData->timeSubmit = date("d-m-Y H:i");



    //Store this into a file and before we do that we serialise it
    $serialisedProduct = serialize($checkInData);
    //put the contents into this file, pass in the serialised product
    file_put_contents('datasubmit2.txt', $serialisedProduct);
    //Now we can unserialise this and place back into browser
    //Prints this to the screen
   $message = 'Product Successfully Created <br>';

    //This will get the files from the actual file we put the serialised product in
    $productFromFile = file_get_contents('datasubmit2.txt');
    //This is unserialising the product from the productfile
    $unserialisedProduct = unserialize($productFromFile);

    //this is the defined variable we can use to insert into the html to be displayed
    $message .= $unserialisedProduct->title;
    $message .= $unserialisedProduct->name;
    $message .= $unserialisedProduct->rating;
    $message .= $unserialisedProduct->review;






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
        <label for="title">Name:</label>
        <input name="name" type="text" id="name">
    </div>
    <div>
        <label for="title">Rating:</label>
        <input name="rating" type="text" id="rating">
    </div>
    <div>
        <label for="title">Review:</label>
        <input name="review" type="text" id="review">
    </div>
    <div>
        <button type="submit">Create Product</button>
    </div>
</form>

<?php //foreach ($checkInData as $checkIn): ?>
<!--    --><?php //var_dump($checkInData->review) ?>
<!---->
<?php //endforeach; ?>

</body>
</html>


