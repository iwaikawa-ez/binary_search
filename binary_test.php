<?php
require_once('binary_search.php');

class binarySearchTest extends PHPUnit_Framework_TestCase
{
  public function test_find()
  {
    $this->assertEquals(binary_search(array(1, 3, 5, 10), 3), 1);
  }

  public function test_cannot_find()
  {
    $this->assertEquals(binary_search(array(1, 3, 5, 10), 7), false);
  }
}
