<?php

namespace App\EventListener;

use App\Form\Model\Equation;

final class BitwiseAnd extends AbstractCalculator
{
    /**
     * @inheritDoc
     */
    public function getOperator(): string
    {
        return 'and';
    }

    /**
     * @inheritDoc
     */
    public function solve(Equation $equation): float
    {
        return $this->calculator->bitwiseAnd($equation->getOperandA(), $equation->getOperandB());
    }
}
