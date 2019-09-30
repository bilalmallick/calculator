<?php

namespace App\EventListener;

use App\Form\Model\Equation;

final class Division extends AbstractCalculator
{
    /**
     * @inheritDoc
     */
    public function getOperator(): string
    {
        return 'division';
    }

    /**
     * @inheritDoc
     */
    public function solve(Equation $equation): float
    {
        return $this->calculator->divide($equation->getOperandA(), $equation->getOperandB());
    }
}
