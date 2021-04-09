<?php

require_once 'Magic/carbon2.php';

//require_once 'vendor/autoload.php';
use Carbon\Carbon;


class checkInData
{
    public $name;
    public $dateofbirth;
    public $email;
    public $timeSubmit;


}


//Checking if the POST variable is not empty before we do any processing
if (!empty($_POST)) {
    //Creating the new product gives us a working product
    $checkInData = new checkInData();
    //This will hydrate our product object with the form submission
    $checkInData->name = $_POST['name'];
    $checkInData->dateofbirth = $_POST['dateOfBirth'];
    $checkInData->email = $_POST['email'];
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
    $message .= $unserialisedProduct->name;
    $message .= $unserialisedProduct->dateofbirth;
    $message .= $unserialisedProduct->email;

}

if (isset($_POST['submit'])) {
    $file = $_FILES['file'];

    //Different variables for the different file type checks we want to do
    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];
    $fileType = $_FILES['file']['type'];

    //File explode will split the file uploads name after the dot for example (picture.jpeg)
    $fileExt = explode('.', $fileName);

    //The next bit will lowercase the file so that we dont run into any errors due to capitalisation
    $fileActualExt = strtolower(end($fileExt));

    //The next bit is a variable that's allowing the extension file types we want
    $allowed = array('jpg', 'jpeg', 'png');

    //This if statement will check if any of the extensions we listed will be in the
    //fileActualExt variable.. if true then it will allow
    if (in_array($fileActualExt, $allowed)) {
        //we need to write an if statement inside the if statement to check if there
        //are any errors within the file using the fileError variable we created
        if ($fileError === 0) {

            //we now need to check the file size with another if statement
            if ($fileSize < 1000000) {
                //This creates a unique ID for the file based on realtime format in microseconds.
                //its important to add the file type behind the unique name so that the extension gets
                //added onto the id and its clear what file type it is. If this was left out
                //then it would not be classed as an image anymore "example2343.jpeg"
                $fileNameNew = uniqid('', true).".".$fileActualExt;

                //We now need to tell it where we want to upload to inside our root folder.. we
                //want this to go to the uploads folder.
                // Attaching fileNameNew will make sure the file attaches with the id and
                // file extension is created
                $fileDestination = 'uploads/' . $fileNameNew;

                //We now need to create a function that actually uploads the file
                //the move_uploaded_file will tell the script where the files temporary location
                //is and the destination we want to upload the photo to.. which is the uploads
                //folder
                move_uploaded_file($fileTmpName, $fileDestination);

                //now we can bring us back to the page after the upload is complete
                header("Location: W4S1_Exercise1.php?uploadsuccess");
                //now we can echo out a success message

            } else {
                echo "Your file is too big!";
            }
        } else {
            echo "There was an error uploading your file!";
        }
        //This else statement will be stating that if everything else fails then the file type
        //is not suitable for upload
    } else {
        echo "You cannot upload files of this type!";
    }
}



