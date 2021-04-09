<?php

require_once 'db_Initech.php';

$stmt = $dbh->prepare(
    'INSERT INTO checkins (user_name) VALUES (:user_name)'
);

$stmt->execute([
   'user_name' => $newCheckinData
]);

$checkin = $stmt->fetch(PDO::FETCH_ASSOC);

var_dump($checkin);
