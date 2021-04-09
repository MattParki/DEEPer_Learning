<?php
?>
<!DOCTYPE html>

<html lang="en">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>



    <title>Profile Details</title>

</head>
<body>
<div class="d-flex justify-content-center">
    <p class="card-text">
<style>
    #myCarousel {
        width:140px;
        height:160px;
    }
</style>

<div class="container">
<h2>Upload Profile Details</h2>
<!-- isset.. or 'is set' is a test for checking if the inside parameter is set or not -->
<?php if(isset($message)) : ?>
    Profile Details Created: <?= $message ?>
<?php endif; ?>

<div class="container">
<form action="upload.php" method="POST" enctype="multipart/form-data">
    <div class="col-sm-4">
        <label for="title">Name:</label><br>
        <input name="name" type="text" id="name">
    </div>

    <div class="col-sm-4">
        <label for="title">D.O.B:</label><br>
        <input name="dateOfBirth" type="text" id="dateOfBirth">
    </div>

    <div class="col-sm-4">
        <label for="title">Email:</label><br>
        <input name="email" type="text" id="email">
    </div>
    <br>
    <div>
        <br>
        <h2>Select image to upload:</h2><br>
        <input type="file" name="file""><br><br>
        <button type="submit" name="submit">Upload</button>
    </div>
</form>
<br>
    <!-- Carousel Script Below -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <img src="uploads/" alt="Cat1">
                <div class="carousel-caption">
                    <h3></h3>
                    <p></p>
                </div>
            </div>

            <div class="item">
                <img src="cat2.jpeg" alt="Cat2">
                <div class="carousel-caption">
                    <h3></h3>
                    <p></p>
                </div>
            </div>

            <div class="item">
                <img src="cat3.jpeg" alt="Cat3">
                <div class="carousel-caption">
                    <h3></h3>
                    <p></p>
                </div>
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>

    <!-- END -->


    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="W4E1_Exercise_Initech.js"></script>
</body>
</html>
