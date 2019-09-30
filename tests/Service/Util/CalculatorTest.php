<?php

namespace App\Tests\Service\Util;

use App\Service\Util\Calculator;
use Symfony\Bundle\FrameworkBundle\Tests\TestCase;

class CalculatorTest extends TestCase
{
    /** @var Calculator */
    protected $calculator;

    /**
     * @dataProvider additionInputAndResultingCountProvider
     */
    public function testAdd($operandA, $operandB, $expectedResult)
    {
        $calculator = new Calculator();

        $result = $calculator->add($operandA, $operandB);

        $this->assertEquals($expectedResult, $result);
        
    }

    public function additionInputAndResultingCountProvider()
    {
        return [
            [1, 2, 3],
            [4, 5, 9],
            [400, 55, 455],
        ];
    }

    /**
     * @dataProvider subttractionInputAndResultingCountProvider
     */
    public function testSubtract($operandA, $operandB, $expectedResult)
    {
        $calculator = new Calculator();

        $result = $calculator->subtract($operandA, $operandB);

        $this->assertEquals($expectedResult, $result);

    }

    public function subttractionInputAndResultingCountProvider()
    {
        return [
            [1, 2, -1],
            [5, 2, 3],
            [400, 55, 345],
        ];
    }

    /**
     * @dataProvider additionInputAndResultingCountProvider
     */
    public function testMultiply($operandA, $operandB, $expectedResult)
    {
        $calculator = new Calculator();

        $result = $calculator->add($operandA, $operandB);

        $this->assertEquals($expectedResult, $result);

    }

    public function multiplicationInputAndResultingCountProvider()
    {
        return [
            [1, 2, 1],
            [4, 5, 20],
            [100, 55, 5500],
        ];
    }

    /**
     * @dataProvider divisionInputAndResultingCountProvider
     */
    public function testDivide($operandA, $operandB, $expectedResult)
    {
        $calculator = new Calculator();

        $result = $calculator->divide($operandA, $operandB);

        $this->assertEquals($expectedResult, $result);

    }

    public function divisionInputAndResultingCountProvider()
    {
        return [
            [1, 2, 0.5],
            [40, 5, 8],
            [100, 5, 20],
        ];
    }

    /**
     * @dataProvider bitwiseAndInputAndResultingCountProvider
     */
    public function testBitwiseAnd($operandA, $operandB, $expectedResult)
    {
        $calculator = new Calculator();

        $result = $calculator->bitwiseAnd($operandA, $operandB);

        $this->assertEquals($expectedResult, $result);

    }

    public function bitwiseAndInputAndResultingCountProvider()
    {
        return [
            [7, 10, 2],
            [4, 5, 4],
            [100, 5, 4],
        ];
    }

    /**
     * @dataProvider bitwiseOrInputAndResultingCountProvider
     */
    public function testBitwiseOr($operandA, $operandB, $expectedResult)
    {
        $calculator = new Calculator();

        $result = $calculator->bitwiseOr($operandA, $operandB);

        $this->assertEquals($expectedResult, $result);

    }

    public function bitwiseOrInputAndResultingCountProvider()
    {
        return [
            [7, 10, 15],
            [4, 5, 5],
            [100, 5, 101],
        ];
    }

}
