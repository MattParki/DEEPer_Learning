<?php
  function getNames() {
    // This data could come from anywhere! A file, a database, an API call etc
    return ['Chris', 'Danny', 'Jeremy'];
  }

  $names = getNames();
?>

<!DOCTYPE html>
<html>
  <head></head>
  <body>
    <h1>Names</h1>
    <ul>
      <?php
        foreach ($names as $name) {
          echo '<li>' . $name . '</li>';
        }
      ?>
    </ul>
  </body>
</html>
