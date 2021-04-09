
File: exercises/week-03/classes-1/index.php
Browser: http://localhost/exercises/week-03/classes-1/index.php

<?php
  class User {
    public $name = 'Joe Bloggs';
  }

  $user = new User();

  echo $user->name . '<br>'; // Joe Bloggs

  $user->name = 'Jane Doe';

  echo $user->name; // Jane Doe;
?>
