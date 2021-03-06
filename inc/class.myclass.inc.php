<?php
// set up the class
class MyClass {

  public $prop1 = "I'm a class property!";

  public static $count = 0;

  public function __construct() {
    echo '<p>The class <em>' . __CLASS__ . '</em> was instantiated!</p>';
  }

  // public function __destruct() {
  //   echo '<p>The class <em>' . __CLASS__ . '</em> was destroyed!</p>';
  // }

  public function __toString() {
    return '<p>Using the <code>toString()</code> method: ' . $this->getProperty() . '</p>';
  }

  public function setProperty( $newVal ) {
    $this->prop1 = $newVal;
  }

  protected function getProperty() {
    return $this->prop1;
  }

  public static function plusOne() {
    return '<span class="block">The count is <em>' . self::$count++ . '</em>.</span>';
  }

}


class MyOtherClass extends MyClass {
  public function __construct() {
    // call the parent class's constructor
    parent::__construct();

    // echo new message
    echo '<p>A new constructor in <em>' . __CLASS__ . '</em>.</p>';
  }

  public function newMethod() {
    echo '<p>From a new method in <em>' . __CLASS__ . '</em>.</p>';
  }

  public function callProtected() {
    return $this->getProperty();
  }
}