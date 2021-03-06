<?php

require_once 'db_Initech.php';
require_once 'entities.php';

$productAddedSuccess = false;


if (!empty($_POST)) {

    $newProductTitle = $_POST['name'];
    $newRating = $_POST['rating'];
    $newReview = $_POST['review'];

    if (empty($newProductTitle) || empty($newReview) || empty($newRating)) {
        $status = "All fields are compulsory.";
    } else {
            $stmt = $dbh->prepare('INSERT INTO checkins (name, rating, review) VALUES (:name, :rating, :review)');
            $stmt->execute(['name' => $newProductTitle, 'rating' => $newRating, 'review' => $newReview]);
            if ($stmt->rowCount() > 0) {
                $productAddedSuccess = true;

        }
    }

}


?>


<!DOCTYPE html>


<html lang="en">

<head>
    <title></title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="initech.css">

</head>
<body>


<!-- Carousel Script Below -->
<div style="height: 0;"></div>
<div class="h-15 d-inline-block" style="width: 20px;"></div>

<div class ="container">

    <div class="row justify-content-start">
        <div class="col">

            <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner" role="listbox" style=" width:100%; height: 320px !important;">
                    <div class="carousel-item active" data-interval="100000">
                        <img src="cat4.jpeg" class="d-block w-100" alt="cat1">
                    </div>
                    <div class="carousel-item" data-interval="2000">
                        <img src="cat3.jpeg" class="d-block w-100" alt="cat2">
                    </div>
                    <div class="carousel-item">
                        <img src="cat2.jpeg" class="d-block w-100" alt="cat3">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

        </div>


        <!-- Lorem Ipsum next to the carousel on the right -->

        <div class="col">


            <h1>Lorem Ipsum</h1>
            <p class="main-text">
                Lorem ipsum natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.</p>
            <div class="container">
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Check In
                    </button>
                    <form class="dropdown-menu p-4" action="" method="post">
                            <?php if ($productAddedSuccess): ?>
                                <p class="alert alert-success">Checkin added Successfully!</p>
                            <?php endif; ?>

                        <div class="form-group">
                            <label for="DropdownFormName">Name</label>
                            <input type="text" name="name" class="form-control" id="DropdownFormName" placeholder="Insert Name">
                        </div>
                        <div class="form-group">
                            <label for="DropdownFormName">Rating</label>
                            <input type="text" name="rating" class="form-control" id="DropdownFormName" placeholder="Insert Rating">
                        </div>
                        <div class="form-group">
                            <label for="txtarea">Review</label>
<!--                            <input type="text" name="review" class="form-control" id="DropdownFormName" placeholder="Insert Review">-->
                            <textarea id="txtarea" name="review" spellcheck="false" placeholder="Write a Review..."></textarea>
                        </div>
                            <button type="submit" class="btn btn-success">Save Checkin</button>
                    </form>



                </div>

            </div>
        </div>


    </div>

</div>
<div style="height: 60px;"></div>
<div class="h-20 d-inline-block" style="width: 120px;"></div>

<div class="container">
    <div class="row">
        <div class="col">

            <h2>
                Additional information
            </h2>
        </div>
    </div>

</div>

<div style="height: 0px;"></div>
<div class="h-15 d-inline-block" style="width: 120px;"></div>

<div class="container">
    <table width= 100%>

        <tr>
            <td><b>Average Rating</b></td><td><img src="stars.png" class="stars" alt="Stars"></td>

        </tr>




        <div class="container">


            <tr>
                <td><b>Another Statistic</b>
                <td>78/100</td>
            </tr>

        </div>
        <div class="container">


            <tr>
                <td><b>Yet Another Statistic</b><td>Something</td>

            </tr>

        </div>
    </table>

    <!-- Recent Checkin Data, Hard Coded -->

</div>
<div style="height: 60px;"></div>
<div class="h-20 d-inline-block" style="width: 120px;"></div>
<div class="container">
    <h2>
        Recent Checkins
    </h2>
</div>
<div style="height: 0px;"></div>
<div class="h-5 d-inline-block" style="width: 20px;"></div>

<div class="container">


    <tr>
        <td><h4>Joe Bloggs <img src="stars.png" alt="Stars"><td></td></h4></td>
        <td></td>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Scelerisque fermentum dui faucibus in. Eu lobortis elementum nibh tellus molestie. Quis viverra nibh cras pulvinar mattis nunc sed blandit. Id leo in vitae turpis massa sed elementum tempus. Odio morbi quis commodo odio. Lorem dolor sed viverra ipsum nunc aliquet. Enim ut sem viverra aliquet eget sit amet tellus cras. Tellus in hac habitasse platea dictumst. Massa vitae tortor condimentum lacinia. Maecenas volutpat blandit aliquam etiam erat velit scelerisque in. Euismod in pellentesque massa placerat duis. Libero id faucibus nisl tincidunt eget nullam non. Posuere ac ut consequat semper viverra nam libero justo. Sed cras ornare arcu dui vivamus arcu felis.</p>


        <p>23/11/2020</p>

    </tr>
</div>
<div style="height: 10px;"></div>
<div class="h-20 d-inline-block" style="width: 120px;"></div>
<div class="container">

    <tr>
        <td><h4>John Doe <img src="stars.png" alt="Stars"></h4></td>
        <td></td>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Scelerisque fermentum dui faucibus in. Eu lobortis elementum nibh tellus molestie. Quis viverra nibh cras pulvinar mattis nunc sed blandit. Id leo in vitae turpis massa sed elementum tempus. Odio morbi quis commodo odio. Lorem dolor sed viverra ipsum nunc aliquet. Enim ut sem viverra aliquet eget sit amet tellus cras. Tellus in hac habitasse platea dictumst. Massa vitae tortor condimentum lacinia. Maecenas volutpat blandit aliquam etiam erat velit scelerisque in. Euismod in pellentesque massa placerat duis. Libero id faucibus nisl tincidunt eget nullam non. Posuere ac ut consequat semper viverra nam libero justo. Sed cras ornare arcu dui vivamus arcu felis.</p>

        <p>14/12/2020</p>

    </tr>
</div>
<div style="height: 10px;"></div>
<div class="h-20 d-inline-block" style="width: 120px;"></div>
<div class="container">

    <tr>
        <td><h4>Insert Name <img src="stars.png" alt="Stars"></h4></td>
        <td></td>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Scelerisque fermentum dui faucibus in. Eu lobortis elementum nibh tellus molestie. Quis viverra nibh cras pulvinar mattis nunc sed blandit. Id leo in vitae turpis massa sed elementum tempus. Odio morbi quis commodo odio. Lorem dolor sed viverra ipsum nunc aliquet. Enim ut sem viverra aliquet eget sit amet tellus cras. Tellus in hac habitasse platea dictumst. Massa vitae tortor condimentum lacinia. Maecenas volutpat blandit aliquam etiam erat velit scelerisque in. Euismod in pellentesque massa placerat duis. Libero id faucibus nisl tincidunt eget nullam non. Posuere ac ut consequat semper viverra nam libero justo. Sed cras ornare arcu dui vivamus arcu felis.</p>

        <p>14/12/2020</p>

    </tr>
</div>



<div class="container my-5">
    <div class="text-center">
        <button class="btn btn-primary my-3" id="get">Click To View More Reviews!</button>
    </div>
    <hr />



    <!-- Recent Checkin Data, Generated from the API request -->


    <div id="res"></div> <!-- This Div will have the generated data inside -->



</div>




<script>
    $(function() {
        //$("#res").slideToggle(1000).slideToggle(1000);
    })

</script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.0/axios.min.js"></script>
<script src="W5E1_Exercise_Initech.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
