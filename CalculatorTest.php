<?php

final class CalculatorTest extends PHPUnit_Framework_TestCase {
    public function testZeroPlusZeroIsZero() {
      $this->assertEquals(Calculator::add(1, 2) == 3);
    }
}
