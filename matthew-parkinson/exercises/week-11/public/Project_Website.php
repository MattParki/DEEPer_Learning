<?php
use App\DataProvider\DatabaseProvider;
require_once '../src/DataProvider/DatabaseProvider.php';
require_once '../src/setup.php';
use App\Hydrator;
use App\Hydrator\EntityHydrator;



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'Margins/Header.php'; ?>
    <title>Log in</title>
</head>
<br>
<body class="p-4">
<div class="container">
    <?php include 'Nav_Bar/Nav-Bar.php'; ?>

<main role="main" class="container">
<div class="jumbotron">
<h1>Find everything you need for fishing</h1>
<p class="lead" id="card-paragraph">FishingFriends is a comprehensive online resource centre for the fishing community</p>
<a class="btn btn-dark" href="Fishing-Library.php" role="button">View Fishing Products</a>
</div>

<!-- Carousel Script Below -->
<div></div>
<div class="h-15 d-inline-block" style="width: 20px;"></div>


<div class="row justify-content-start">
    <div class="col";>

        <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner" role="listbox" style=" width:100%; height: 320px !important;">
                <div class="carousel-item active" data-interval="100000">
                    <img src="../images/fish1.jpg" class="d-block w-100" alt="fish1">
                </div>
                <div class="carousel-item" data-interval="2000">
                    <img src="../images/fish2.jpeg" class="d-block w-100" alt="fish2">
                </div>
                <div class="carousel-item">
                    <img src="../images/fish3.jpeg" class="d-block w-100" alt="fish3">
                </div>
                <div class="carousel-item">
                    <img src="../images/fish4.jpeg" class="d-block w-100" alt="fish4">
                </div>
                <div class="carousel-item">
                    <img src="../images/fish5.jpeg" class="d-block w-100" alt="fish5">
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


    <!-- Text that is next to the carousel on the right -->

    <div class="col">


        <h1></h1>
        <p class="main-text">
        We are the beginner, novice, weekender, specialist, match winner and syndicate member. We too, know how it feels to GO FISHING – wherever the beach, lake, canal, or river, whatever the species, or ability, you visit the tackle shop, set the alarm, enjoy the journey along the way and dream big.</p>

        <p>Like you, we relish the sunsets, sunrises and connection with the outside world. We feel the same joy when catching your first fish, winning your section and beating your personal best. We’ve had moments of despair too, trips to forget, tackle lost, occasional hook pulls (not many!), and experienced the one that got away!</p>

        <p>We’re with you at the peg draw, weigh-in, bucket soaking, early morning baiting mission and occasional maggot escape. We understand that fishing is for all, without boundaries or restrictions, to purely enjoy the pursuit that angling offers. That is why we are serious about your fishing. </n>

        That’s why FishingFriends exists. Because, like you, we focus on the important bit, the joy of fishing.</p>

    </div>








<?php
require_once '../src/Scripts.php';
require_once 'Margins/Footer.php';
?>

