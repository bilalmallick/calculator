<?php

namespace App\EventListener;

use App\Form\Model\Equation;

final class Multiplication extends AbstractCalculator
{
    /**
     * @inheritDoc
     */
    public function getOperator(): string
    {
        return 'multiplication';
    }

    /**
     * @inheritDoc
     */
    public function solve(Equation $equation): float
    {
        return $this->calculator->multiply($equation->getOperandA(), $equation->getOperandB());
    }
}
