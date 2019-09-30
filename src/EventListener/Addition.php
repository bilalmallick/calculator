<?php

namespace App\EventListener;

use App\Form\Model\Equation;

final class Addition extends AbstractCalculator
{
    /**
     * @inheritDoc
     */
    public function getOperator(): string
    {
        return 'addition';
    }

    /**
     * @inheritDoc
     */
    public function solve(Equation $equation): float
    {
        return $this->calculator->add($equation->getOperandA(), $equation->getOperandB());
    }
}
