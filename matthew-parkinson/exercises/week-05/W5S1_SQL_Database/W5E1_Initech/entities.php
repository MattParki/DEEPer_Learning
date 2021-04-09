<?php

if (!isset($_GET['id'])) {
    die('Please specify an id in the URL');
}

class Product
{
    public int $id;
    public string $title;
    /** @var array @var CheckIn[] */
    public array $checkIns;
}

class CheckIn
{
    public int $id;
    public int $product_id;
    public string $name;
    public int $rating;
    public string $review;
    public string $posted;
}

//connecting to the database and checking for errors and exceptions
$db = new PDO('mysql:host=mysql;dbname=project', 'root', 'root');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//prepare, execute and fetch for the Product class

//Product
$stmt = $db->prepare('SELECT * FROM product WHERE id = :id');

$stmt->execute(['id' => $_GET['id']]);

//fetches the Product class and now can be used by this variable
$product = $stmt->fetchObject(Product::class);

//CheckIn
$stmt = $db->prepare('SELECT * FROM checkin WHERE product_id = :product_id');

$stmt->execute(['product_id' => $product->id]);


//This statement fetches the checkIns public array and hydrates from the Checkin class
$product->checkIns = $stmt->fetchAll(PDO::FETCH_CLASS, Checkin::class);

var_dump($product);