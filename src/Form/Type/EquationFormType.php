<?php

namespace App\Form\Type;

use App\Form\Model\Equation;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\NotBlank;

class EquationFormType extends AbstractType
{
    const INTEGER_MAX_VALUE = 99999;

    /**
     * @inheritDoc
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('operandA', IntegerType::class, [
                'label' => 'Operand A',
                'constraints' => new NotBlank(),
                'attr' => ['max' => self::INTEGER_MAX_VALUE]
            ])
            ->add('operator', ChoiceType::class, [
                'constraints' => new NotBlank(),
                'label' => 'Operator',
                'choices' => [
                    '+' => 'addition',
                    '-' => 'subtraction',
                    '*' => 'multiplication',
                    '/' => 'division',
                    'AND' => 'and',
                    'OR' => 'or'
                ]
            ])
            ->add('operandB', IntegerType::class, [
                'label' => 'Operand B',
                'constraints' => new NotBlank(),
                'attr' => ['max' => self::INTEGER_MAX_VALUE]
            ])
            ->add('calculate', SubmitType::class)
        ;
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {

        return $resolver->setDefaults([
            'data_class' => Equation::class,
            'csrf_protection' => false,
            'allow_extra_fields' => true
        ]);
    }
}
