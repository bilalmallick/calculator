<?php

namespace App\Controller;

use App\EventDispatcher\CalculationEventDispatcher;
use App\Form\Model\Equation;
use App\Form\Type\EquationFormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\HttpFoundation\Request;

final class DefaultController extends AbstractController
{
    /**
     * @var FormFactoryInterface
     */
    private $formFactory;
    /**
     * @var CalculationEventDispatcher
     */
    private $eventDispatcher;

    /**
     * DefaultController constructor.
     */
    public function __construct(FormFactoryInterface $formFactory, CalculationEventDispatcher $eventDispatcher)
    {
        $this->formFactory = $formFactory;
        $this->eventDispatcher = $eventDispatcher;
    }

    public function indexddd(Request $request)
    {
        return $this->render('base.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }


    public function index(Request $request)
    {
        $equation = new Equation();

        $form = $this->createForm(EquationFormType::class, $equation);

        $form->handleRequest($request);

        $result = 0;
        if ($form->isSubmitted() && $form->isValid()) {
            $equation = $form->getData();

            $event = $this->eventDispatcher->dispatchCalculationEvent($equation);

            if (!$event->isPropagationStopped()) {
                throw new \Exception(
                    'No operator is configured to solve this equation.'
                );
            }

            $result = $event->getResult();
        }

        return $this->render('default/compute.html.twig', [
            'form' => $form->createView(),
            'result' => $result
        ]);
    }
}
