
File: exercises/week-02/forms-1/index.php
Browser: http://localhost/exercises/week-02/forms-1/index.php

<?php
  if (!empty($_POST)) {
    // The form was submitted as there is POST data
    echo '<pre>';
    var_dump($_POST);
    echo '</pre>';
  }
?>

...
<body>
  <form action="" method="post">
    <label for="my-username">Username:</label>
    <input type="text" name="username" id="my-username">

    <button type="submit">Submit Form</button>
  </form>
</body>

<hr>

<?php
  if (!empty($_GET)) {
    // There are GET parameters in the URL
    echo '<pre>';
    var_dump($_GET);
    echo '</pre>';
  }
?>

...
<body>
  <form action="" method="get">
    <label for="search-term">Search Term:</label>
    <input type="text" name="searchTerm" id="search-term">

    <button type="submit">Search</button>
  </form>
</body>

<hr>

<?php
  if (!empty($_POST)) {
    // The form was submitted as there is POST data
    echo '<pre>';
    var_dump($_POST);
    echo '</pre>';
  }
?>

...
<body>
  <form action="" method="post">
    <h2>Book Form</h2>
    <label for="genreHorror">
      Horror
      <input
        id="genreHorror"
        type="checkbox"
        name="genre[]"
        value="horror"
      >
    </label>
    <label for="genreFantasy">
      Fantasy
      <input
        id="genreFantasy"
        type="checkbox"
        name="genre[]"
        value="fantasy"
      >
    </label>
    <label for="genreBiography">
      Biography
      <input
        id="genreBiography"
        type="checkbox"
        name="genre[]"
        value="biography"
        >
    </label>

    <button type="submit">Submit Form</button>
  </form>
</body>
