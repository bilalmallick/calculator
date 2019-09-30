<?php

namespace App\Form\Model;

class Equation
{
    /** @var int|null */
    public $operandA;

    /** @var int|null */
    public $operandB;

    /** @var string|null */
    public $operator;

    /**
     * @return int|null
     */
    public function getOperandA(): ?int
    {
        return $this->operandA;
    }

    /**
     * @param int|null $operandA
     */
    public function setOperandA(?int $operandA): void
    {
        $this->operandA = $operandA;
    }

    /**
     * @return int|null
     */
    public function getOperandB(): ?int
    {
        return $this->operandB;
    }

    /**
     * @param int|null $operandB
     */
    public function setOperandB(?int $operandB): void
    {
        $this->operandB = $operandB;
    }

    /**
     * @return string|null
     */
    public function getOperator(): ?string
    {
        return $this->operator;
    }

    /**
     * @param string|null $operator
     */
    public function setOperator(?string $operator): void
    {
        $this->operator = $operator;
    }
}
