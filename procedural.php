<?php
/**
 * procedural.php
 */

// turn on errors
error_reporting(1);
error_reporting(E_ALL);
ini_set("error_reporting", E_ALL);

// functions
function changeJob( $person, $newjob ) {
  $person['job'] = $newjob;
  return $person;
}

function happyBirthday( $person ) {
  $person['age']++;
  return $person;
}

$person1 = array(
  'name' => 'Tom',
  'job' => 'button pusher',
  'age' => 34
);

$person2 = array(
  'name' => 'John',
  'job' => 'lever puller',
  'age' => 41
);
?>

<html>
<head>
  <!-- Web Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Source+Code+Pro|Source+Sans+Pro:400,400i,600,700" rel="stylesheet">

  <link href="assets/css/highlight.css" rel="stylesheet">
  <script src="assets/js/highlight.js"></script>
  <script>hljs.initHighlightingOnLoad();</script>

  <style>
    html {
      font-size: 20px;
    }
    body {
      padding: 20px;
      color: #333;
      background-color: #EEE;
      font-size: 1rem;
      font-family: "Source Sans Pro", Arial, "Helvetica Neue", Helvetica, sans-serif;
    }
    code, pre {
      border-radius: 3px;
      font-size: 0.9rem;
      font-family: "Source Code Pro", monospace;
    }
    code {
      padding: 3px 6px;
      background-color: #DDD;
    }
    .block {
      display: block;
    }
  </style>
</head>
<body>

  <?php
  // Output starting values for people
  echo '<pre>Person 1: ' . print_r( $person1, TRUE ) . '</pre>';
  echo '<pre>Person 2: ' . print_r( $person2, TRUE ) . '</pre>';

  // Tom got a new job and had a birthday
  $person1 = changeJob( $person1, 'box mover' );
  $person1 = happyBirthday( $person1 );

  // John had a birthday
  $person2 = happyBirthday( $person2 );

  // Output new values
  echo '<pre>Person 1: ' . print_r( $person1, TRUE ) . '</pre>';
  echo '<pre>Person 2: ' . print_r( $person2, TRUE ) . '</pre>';
  ?>

  <!-- Navigation -->
  <a href="oop.php">Link to OOP example</a>

  <a class="block" href="index.php" style="margin-top: 1em;">&laquo; Go home</a>

</body>
</html>
