<?php
/**
 * index.php
 *
 * @link https://code.tutsplus.com/tutorials/object-oriented-php-for-beginners--net-12762
 */

// turn on errors
error_reporting(1);
error_reporting(E_ALL);
ini_set("error_reporting", E_ALL);

// require the classes
function __autoload( $class_name ) {
  include_once 'inc/class.' . $class_name . '.inc.php';
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
  // create new object
  $obj = new MyClass();

  // get value of $prop1
  echo $obj;

  // destroy the object
  // unset( $obj );
  ?>

  <pre><code class="php"><?php var_dump( $obj ); ?></code></pre>

  <?php
  // Output message at end of file
  echo "<p>Page is finished rendering <em>here</em>.</p>";


  // create a second object
  $newobj = new MyOtherClass;

  echo $newobj->newMethod();

  echo $newobj->callProtected();
  ?>

  <!-- Loop -->
  <p class="loop">
    <?php
    // while loop to use static count
    do {
      echo MyClass::plusOne();
    } while ( MyClass::$count < 10 );
    ?>
  </p>

  <!-- Navigation -->
  <a href="pages/procedural.php">Link to procedural example</a>&nbsp; | &nbsp;<a href="pages/oop.php">Link to OOP example</a>

</body>
</html>

