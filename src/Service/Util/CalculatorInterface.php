<?php


namespace App\Service\Util;


interface CalculatorInterface
{
    // Arithmetic

    /**
     * Adds given numbers
     *
     * @param float $operandA
     * @param float $operandB
     *
     * @return float
     */
    public function add(float $operandA, float $operandB): float;

    /**
     * Subtracts given numbers
     *
     * @param float $operandA
     * @param float $operandB
     *
     * @return float
     */
    public function subtract(float $operandA, float $operandB): float;

    /**
     * Multiplies given numbers
     *
     * @param float $operandA
     * @param float $operandB
     *
     * @return float
     */
    public function multiply(float $operandA, float $operandB): float;

    /**
     * Divides given numbers
     *
     * @param float $operandA
     * @param float $operandB
     *
     * @return float
     */
    public function divide(float $operandA, float $operandB): float;

    // Bitwise

    /**
     * Does bitwise AND operation on given numbers
     *
     * @param float $operandA
     * @param float $operandB
     *
     * @return float
     */
    public function bitwiseAnd(float $operandA, float $operandB): float;

    /**
     * Does bitwise OR operation on given numbers
     *
     * @param float $operandA
     * @param float $operandB
     *
     * @return float
     */
    public function bitwiseOr(float $operandA, float $operandB): float;


}
