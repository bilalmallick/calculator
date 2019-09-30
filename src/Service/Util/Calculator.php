<?php

namespace App\Service\Util;


class Calculator implements CalculatorInterface
{
    /**
     * @inheritDoc
     */
    public function add(float $operandA, float $operandB): float
    {
        return $operandA + $operandB;
    }

    /**
     * @inheritDoc
     */
    public function subtract(float $operandA, float $operandB): float
    {
        return $operandA - $operandB;
    }

    /**
     * @inheritDoc
     */
    public function multiply(float $operandA, float $operandB): float
    {
        return $operandA * $operandB;
    }

    /**
     * @inheritDoc
     */
    public function divide(float $operandA, float $operandB): float
    {
        //Division by 0 protection, returns operand A
        $operandB = $operandB === 0 ? 1 : $operandB;

        return $operandA / $operandB;
    }

    /**
     * @inheritDoc
     */
    public function bitwiseAnd(float $operandA, float $operandB): float
    {
        return $operandA & $operandB;
    }

    /**
     * @inheritDoc
     */
    public function bitwiseOr(float $operandA, float $operandB): float
    {
        return $operandA | $operandB;
    }
}
