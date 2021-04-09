<?php

require_once 'db_Initech.php';

$checkinAddedTrue = false;

if (!empty($_POST)) {
    $newCheckinName = $_POST['user_name'];

    if (!empty($newCheckinName)) {

        $stmt = $dbh->prepare('INSERT INTO checkins (user_name) VALUES (:id)');

        $stmt->execute([
            'user_name' => $newCheckinName,
        ]);

        if($stmt->rowCount() > 0) {
            $checkinAddedTrue = true;

        }
    }
}
