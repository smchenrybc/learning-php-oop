<?php
// set up the class
class MyClass {

  public $prop1 = "I'm a class property!";

  public function __construct() {
    echo '<p>The class <em>' . __CLASS__ . '</em> was instantiated!</p>';
  }

  public function __destruct() {
    echo '<p>The class <em>' . __CLASS__ . '</em> was destroyed!</p>';
  }

  public function setProperty( $newVal ) {
    $this->prop1 = $newVal;
  }

  public function getProperty() {

    return '<p>Using the <code>toString()</code> method: ' . $this->prop1 . '</p>';
  }

  public function __toString() {
    return $this->getProperty();
  }

}