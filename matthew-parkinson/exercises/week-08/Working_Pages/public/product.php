<?php

require_once '../src/setup.php';

$productId = $_GET['productId'];

$product = $dbProvider->getProduct($productId);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'template_parts/header_includes.php' ?>
    <title>Product Detail</title>
    <style>
        .star-rating {
            background-color: grey;
            width: 200px;
            height: 30px;
            display: inline-block;
        }

        .star-rating div {
            height: 100%;
            background-color: cornflowerblue;
        }
    </style>
</head>
<body class="p-4">
<div class="container">
    <?php include 'template_parts/navbar.php' ?>
    <div class="card p-4">
        <div class="row">
            <div class="col-md-6 col-sm-12 text-center">
                <img src="http://placekitten.com/600/300" alt="cat" class="img-fluid">
                <div class="row py-2">
                    <div class="col-4"><img src="http://placekitten.com/200/150" alt="cat" class="img-fluid"></div>
                    <div class="col-4"><img src="http://placekitten.com/200/150" alt="cat" class="img-fluid"></div>
                    <div class="col-4"><img src="http://placekitten.com/200/150" alt="cat" class="img-fluid"></div>
                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <h1><?= $product->title ?></h1>
                <p>
                    <?= $product->description ?>
                </p>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#checkinModal">
                    Check In
                </button>
            </div>
        </div>
    </div>
    <h2 class="my-4">Additional Information</h2>
    <div class="card p-4 my-4">
        <table class="table table-striped">
            <tbody>
            <tr>
                <th>Average Rating</th>
                <td><?= $product->average_rating ?><img src="stars.png" alt="Star Rating" width="103" height="24"></td>
            </tr>
            <tr>
                <th>Another Statistic</th>
                <td>78/100</td>
            </tr>
            <tr>
                <th>Yet Another Statistic</th>
                <td>Something else</td>
            </tr>
            </tbody>
        </table>
    </div>
    <h2 class="my-4">Recent Checkins</h2>

    <div id="checkins">
        <?php
        if (!count($product->getCheckins())) : ?>
        No checkins found, please checkin!
        <?php
        endif;
        foreach($product->getCheckins() as $checkIn): ?>
        <div class="card p-4 my-4">
            <h3><?= $checkIn->name ?>
                <div class="star-rating">
                    <div style="width:<?= $checkIn->rating * 20; ?>%;"></div>
                </div>
            </h3>
            <p><?= $checkIn->review ?></p>
        </div>
        <?php endforeach; ?>
    </div>
    <div class="modal fade" id="checkinModal" tabindex="-1" aria-labelledby="checkinModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="post" action="checkin-create.php">
                    <div class="modal-header">
                        <h5 class="modal-title" id="checkinModalLabel">Check In</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" name="product_id" value="<?= $_GET['productId'] ?>">
                        <div class="form-group">
                            <label for="name">Your Name</label>
                            <input type="text" name="name" id="name" placeholder="Enter name" aria-describedby="yourName" value="<?= $loggedInUser->name ?? '' ?>">
                            <small id="yourName" class="form-text text-muted">Please enter your name.</small>
                        </div>
                        <div class="form-group">
                            <label for="rating">Your Rating</label>
                            <input type="number" class="form-control" name="rating" id="rating" aria-describedby="yourRating" placeholder="Enter rating" min="1" max="5">
                            <small id="yourRating" class="form-text text-muted">Rate the product from 1 to 5.</small>
                        </div>
                        <div class="form-group">
                            <label for="review">Review</label>
                            <textarea class="form-control" id="review" name="review" aria-describedby="yourReview" placeholder="Additional comments"></textarea>
                            <small id="yourReview" class="form-text text-muted">What did you think?</small>
                         </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include 'template_parts/footer_includes.php'; ?>
</body>
</html>
