<?php
use App\Hydrator;
use App\DatabaseProvider;
use App\Hydrator\EntityHydrator;
use App\Entity\Fishing;
require_once '../src/setup.php';


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
    <div class="card-deck">
      <div class="card">
        <img class="card-img-top" src="../images/fish1.jpg" alt="Card image cap">
        <div class="card-body">
        <h5 class="card-title">Fishing Bait<?= $fishing->$id ?></h5>
        <p class="card-text"></p>
        </div>
        <!-- Trigger the modal with a button -->
        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal1">Read More</button>
        <button type="button" class="btn btn-success" data-toggle="" data-target="#basket">Add To Basket</button>

<!-- Modal -->
<div id="myModal1" class="modal" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-dialog modal-xl">
      <div class="modal-header">
        <div class="card w-125">
        <div class="card-header">
        <ul class="nav nav-pills card-header-pills">
  </div>
    </ul>
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-4">
            <h2>Fishing Bait</h5>
            </h2>
            <img class="card-img-top" src="../images/fish1.jpg" alt="Card image cap">

          </div>
            <div class="col-8">
            </br>
            <p class="card-text">
          </div>
        </div>
      </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Close</button>
            </div>
    </div>
  </div>
</div>
</div>
</div>
  <div class="card-footer">
    <small class="text-muted">Last updated 3 mins ago</small>
  </div>
</div>

<!--NEW CARD -->
<div class="card">
        <img class="card-img-top" src="../images/fish2.jpeg" alt="Card image cap">
        <div class="card-body">
        <h5 class="card-title">Fish We Catch</h5>
        <p class="card-text"></p>
        </div>
        <!-- Trigger the modal with a button -->
        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal2">Read More</button>
        <button type="button" class="btn btn-success" data-toggle="" data-target="#basket">Add To Basket</button>

<!-- Modal -->
<div id="myModal2" class="modal" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-dialog modal-xl">
      <div class="modal-header">
        <div class="card w-125">
        <div class="card-header">
        <ul class="nav nav-pills card-header-pills">
  </div>
    </ul>
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-4">
            <h2>Fish We Catch</h5>
            </h2>
            <img class="card-img-top" src="../images/fish3.jpeg" alt="Card image cap">

          </div>
            <div class="col-8">
            </br>
            <p class="card-text">
          </div>
        </div>
      </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Close</button>
            </div>
    </div>
  </div>
</div>
</div>
</div>
  <div class="card-footer">
    <small class="text-muted">Last updated 3 mins ago</small>
  </div>
</div>

<!--NEW CARD -->

<div class="card">
        <img class="card-img-top" src="../images/fish4.jpeg" alt="Card image cap">
        <div class="card-body">
        <h5 class="card-title">Fishing Rods</h5>
        <p class="card-text"></p>
        </div>
        <!-- Trigger the modal with a button -->
        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal3">Read More</button>
        <button type="button" class="btn btn-success" data-toggle="" data-target="#basket">Add To Basket</button>

<!-- Modal -->
<div id="myModal3" class="modal" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-dialog modal-xl">
      <div class="modal-header">
        <div class="card w-125">
        <div class="card-header">
        <ul class="nav nav-pills card-header-pills">
  </div>
    </ul>
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-4">
            <h2>Fishing Rods</h5>
            </h2>
            <img class="card-img-top" src="../images/fish4.jpeg" alt="Card image cap">

          </div>
            <div class="col-8">
            </br>
            <p class="card-text">
          </div>
        </div>
      </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Close</button>
            </div>
    </div>
  </div>
</div>
</div>
</div>
  <div class="card-footer">
    <small class="text-muted">Last updated 3 mins ago</small>
  </div>
</div>

<!--NEW CARD -->


	
	
<?php
require_once '../src/Scripts.php';
require_once 'Margins/Footer.php';
?>

