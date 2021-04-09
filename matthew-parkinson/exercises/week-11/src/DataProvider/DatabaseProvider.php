<?php

namespace App\DataProvider;
use App\Entity\Fishing;
use App\Hydrator\EntityHydrator;
use PDO;

$dbProvider = new DatabaseProvider();

class DatabaseProvider
{
    private \PDO $dbh;

    // Constructor method used to initialise first before other functions are called 

    public function __construct()
    {
        try {
        $this->dbh = new PDO(
            'mysql:dbname=Fishing;host=mysql',
            $_ENV['DBUSERNAME'],
            $_ENV['DBPASSWD']
        );

        $this->dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Using catch to show a message to the user incase the connection does not happen and it fails 

        } catch (PDOException $e) {
            // We could/should log this!
            die('Unable to establish a database connection');
        }
    }

    // the class we are using in order to setup the SQL and do any prepare statements.. basically gathering what we need from the database 


}
