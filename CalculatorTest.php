<?php

final class CalculatorTest extends PHPUnit_Framework_TestCase {
    public function test1Plus2Equals3() {
        // 1 + 2 should equal 3
        $this->assertEquals(Calculator::add(1, 2), 3);
    }

    public function test0Plus0Equals0() {
        // 0 + 0 should equal 0
        $this->assertEquals(Calculator::add(0, 0), 0);
    }

    public function test3Minus2Equals1() {
        // 3 - 2 should equal 1
        $this->assertEquals(Calculator::subtract(3, 2), 1);
    }
}
