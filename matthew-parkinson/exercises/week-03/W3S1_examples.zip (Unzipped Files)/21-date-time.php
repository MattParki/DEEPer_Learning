
<?php

/* Key formatting characters;
  Y: 4 digit year
  m: 2 digit month
  d: 2 digit day
  H: 2 digit hours
  i: 2 digit minutes
  s: 2 digit seconds
  l: day of the week (e.g. Sunday)
  F: month of the year (e.g. July)
*/

// time() returns the current timestamp
echo time(); // e.g. 1597610372

// date() by default uses the current time() value
echo date('Y-m-d H:i:s'); // e.g. 2020-08-17 12:30:05

// strtotime() converts various textual date descriptions to a timestamp
echo strtotime('+1 week 2 days 3 hours'); // 1598399029

// The above can then be combined as required
$oneWeekToday = date('d/m/Y', strtotime('+1 week'));

?>

<?php

// Defaults to now
$dateTime = new DateTime();
echo $dateTime->format('Y-m-d');

// Optional date can be provided on creation
$dateTime = new DateTime('2020-05-12');

// If the format of the required date is known;
$dateTime = DateTime::createFromFormat('j-M-Y', '15-Feb-2009');
