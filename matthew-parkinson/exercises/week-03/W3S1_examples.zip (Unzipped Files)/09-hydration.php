<?php
  class User {
    public $name;
  }

  // $users could come from a database, file(s), an API call etc
  $users = [
    [
      'name' => 'Joe Bloggs',
      'age' => 20,
    ], [
      'name' => 'Jane Doe',
      'age' => 25,
    ],
  ];

  $userObjects = [];

  foreach ($users as $user) {
    $instance = new User();
    $instance->name = $user['name'];
    $instance->age = $user['age'];

    $userObjects[] = $instance;
  }

  // $userObjects is now an array of User objects containing the user data
  echo '<pre>';
  var_dump($userObjects);
  echo '</pre>';
