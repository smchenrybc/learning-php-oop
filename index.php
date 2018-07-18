<?php
// turn on errors
error_reporting(1);
error_reporting(E_ALL);
ini_set("error_reporting", E_ALL);

// require the classes
require "classes.php";
?>

<html>
<head>
  <!-- Web Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Ubuntu+Mono:400,700|Ubuntu:400,400i,700" rel="stylesheet">

  <link href="assets/css/highlight.css" rel="stylesheet">
  <script src="assets/js/highlight.js"></script>
  <script>hljs.initHighlightingOnLoad();</script>

  <style>
    body {
      padding: 20px;
      color: #333;
      background-color: #EEE;
      font-family: Ubuntu, Arial, "Helvetica Neue", Helvetica, sans-serif;
    }
    code, pre {
      border-radius: 3px;
      font-family: "Ubuntu Mono", monospace;
    }
    code {
      padding: 3px 6px;
      background-color: #DDD;
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
  $newobj = new MySecondClass;

  echo $newobj->newMethod();

  echo $newobj->getProperty();
  ?>

</body>
</html>

