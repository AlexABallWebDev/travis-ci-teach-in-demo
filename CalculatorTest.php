<?php

use PHPUnit\Framework\TestCase;

final class CalculatorTest extends TestCase {
    public function testZeroPlusZeroIsZero() {
      //TODO call function instead of hardcoded zeroes.
      $this->assertEquals(0 + 0, 0);
    }
}
