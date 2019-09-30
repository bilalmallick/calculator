<?php

namespace App\EventDispatcher;

use App\Event\CalculationEvent;
use App\Form\Model\Equation;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Contracts\EventDispatcher\Event;

final class CalculationEventDispatcher
{
    /**
     * @var EventDispatcherInterface
     */
    private $eventDispatcher;


    /**
     * CalculationEventDispatcher constructor.
     */
    public function __construct(EventDispatcherInterface $eventDispatcher)
    {
        $this->eventDispatcher = $eventDispatcher;
    }

    public function dispatchCalculationEvent(Equation $equation): Event
    {
        $event = new CalculationEvent($equation);

        $this->eventDispatcher->dispatch($event, $event::getEventName());
        return $event;
    }
}
