<?php

use PHPUnit\Framework\TestCase;
require "Calculator.php";

class CalculatorTest extends TestCase
{
    public function testAdd()
    {
        $calculatorTest = new Calculator;
        $this->assertTrue($calculatorTest->add(5, 5) === 10);
    }

    public function testSubstract()
    {
        $calculatorTest = new Calculator;
        $this->assertTrue($calculatorTest->substract(5, 5) === 0);
    }

    public function testMultiply()
    {
        $calculatorTest = new Calculator;
        $this->assertTrue($calculatorTest->multiply(5, 5) === 25);
    }

    public function testDivide()
    {
        $calculatorTest = new Calculator;
        $this->assertTrue($calculatorTest->divide(5, 5) === 1);
    }
}

