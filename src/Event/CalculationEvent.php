<?php

namespace App\Event;

use App\Form\Model\Equation;
use Symfony\Contracts\EventDispatcher\Event;

final class CalculationEvent extends Event
{
    /** @var Equation  */
    private $equation;

    /** @var int|float */
    protected $result;

    /**
     * CalculationEvent constructor.
     */
    public function __construct(Equation $equation)
    {
        $this->equation = $equation;
    }

    /**
     * @return string
     */
    public static function getEventName(): string
    {
        return 'equation.solve';
    }

    /**
     * @return Equation
     */
    public function getEquation(): Equation
    {
        return $this->equation;
    }

    /**
     * @return float|int
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * @param float|int $result
     */
    public function setResult($result): void
    {
        $this->result = $result;
    }
}
