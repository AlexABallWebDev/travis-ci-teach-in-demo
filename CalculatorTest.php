<?php

final class CalculatorTest extends PHPUnit_Framework_TestCase {
    public function test1Plus2Is3() {
        //1 + 2 should equal 3
        $this->assertEquals(Calculator::add(1, 2), 3);
    }

    public function test0Plus0Is0() {
        //0 + 0 should equal 0
        $this->assertEquals(Calculator::add(0, 0), 0);
    }
}
