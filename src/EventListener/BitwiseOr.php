<?php

namespace App\EventListener;

use App\Form\Model\Equation;

final class BitwiseOr extends AbstractCalculator
{
    /**
     * @inheritDoc
     */
    public function getOperator(): string
    {
        return 'or';
    }

    /**
     * @inheritDoc
     */
    public function solve(Equation $equation): float
    {
        return $this->calculator->bitwiseOr($equation->getOperandA(), $equation->getOperandB());
    }
}
