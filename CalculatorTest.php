<?php

final class CalculatorTest extends PHPUnit_Framework_TestCase {
    //add tests

    public function test1Plus2Equals3() {
        $this->assertEquals(Calculator::add(1, 2), 3);
    }

    public function test0Plus0Equals0() {
        $this->assertEquals(Calculator::add(0, 0), 0);
    }

    //subtract tests

    public function test3Minus2Equals1() {
        $this->assertEquals(Calculator::subtract(3, 2), 1);
    }

    //multiply tests

    public function test1Times2Equals2() {
      $this->assertEquals(Calculator::multiply(1, 2), 2);
    }

    //divide tests

    public function test3DividedBy3Equals1() {
      $this->assertEquals(Calculator::multiply(1, 2), 1);
    }
}
