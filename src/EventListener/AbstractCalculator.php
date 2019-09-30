<?php

namespace App\EventListener;

use App\Event\CalculationEvent;
use App\Form\Model\Equation;
use App\Service\Util\CalculatorInterface;

abstract class AbstractCalculator
{
    /**
     * @var CalculatorInterface
     */
    protected $calculator;

    /**
     * AbstractCalculator constructor.
     */
    public function __construct(CalculatorInterface $calculator)
    {
        $this->calculator = $calculator;
    }


    /**
     * @return string
     */
    abstract public function getOperator(): string;

    /**
     * @param Equation $equation
     *
     * @return float
     */
    abstract public function solve(Equation $equation): float;

    /**
     * Listening on the equation.solve event.
     *
     * @param CalculationEvent $event
     */
    public function onEquationSolve(CalculationEvent $event)
    {
         $equation = $event->getEquation();

        //  If this operator doesn't match the operator on the equation then we ignore.
        //  This means another event should be picking this up.
        if ($equation->getOperator() != $this->getOperator()) {
            return;
        }

        $answer = $this->solve($equation);

        $event->setResult($answer);
        $event->stopPropagation();
    }
}
