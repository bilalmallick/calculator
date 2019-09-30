<?php

namespace App\EventListener;

use App\Form\Model\Equation;

final class Subtraction extends AbstractCalculator
{
    /**
     * @inheritDoc
     */
    public function getOperator(): string
    {
        return 'subtraction';
    }

    /**
     * @inheritDoc
     */
    public function solve(Equation $equation): float
    {
        return $this->calculator->subtract($equation->getOperandA(), $equation->getOperandB());
    }
}
