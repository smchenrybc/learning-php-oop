<?php
/**
 * oop.php
 */

// turn on errors
error_reporting(1);
error_reporting(E_ALL);
ini_set("error_reporting", E_ALL);

// class goes here:
class Person {

  private $_name;
  private $_job;
  private $_age;

  public function __construct( $name, $job, $age ) {
    $this->_name = $name;
    $this->_job = $job;
    $this->_age = $age;
  }

  public function changeJob( $newjob ) {
    $this->_job = $newjob;
  }

  public function happyBirthday() {
    $this->_age++;
  }

}
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
  // Create new people
  $person1 = new Person( 'Tom', 'button pusher', 34 );
  $person2 = new Person( 'John', 'lever puller', 41 );

  // Output the guys
  echo '<pre>Person 1: ' . print_r( $person1, TRUE ) . '</pre>';
  echo '<pre>Person 2: ' . print_r( $person2, TRUE ) . '</pre>';

  // Tom gets a new job and has a birthday
  $person1->changeJob( 'box mover' );
  $person1->happyBirthday();

  // John has a birthday
  $person2->happyBirthday();

  // Output new values
  echo '<pre>Person 1: ' . print_r( $person1, TRUE ) . '</pre>';
  echo '<pre>Person 2: ' . print_r( $person2, TRUE ) . '</pre>';

  ?>

  <!-- Navigation -->
  <a href="procedural.php">Link to procedural example</a>

  <a class="block" href="../index.php" style="margin-top: 1em;">&laquo; Go home</a>

</body>
</html>
