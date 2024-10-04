<?php

namespace App\Form;

use App\Entity\Event;
use App\Entity\GroupeJDR;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EventType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('dayOfWeek', ChoiceType::class, [
                'choices' => [
                    'Lundi' => 'lundi',
                    'Mardi' => 'mardi',
                    'Mercredi' => 'mercredi',
                    'Jeudi' => 'jeudi',
                    'Vendredi' => 'vendredi',
                    'Samedi' => 'samedi',
                    'Dimanche' => 'dimanche',
                ],
                'label' => 'Jour de la semaine',
                'attr' => [
                    'class' => 'bg-gray-100 border border-gray-300 rounded-lg p-2 text-sm w-full focus:ring-blue-500 focus:border-blue-500'
                ],
            ])
            ->add('eventTime', TimeType::class, [
                'widget' => 'single_text',
                'label' => 'Heure de l\'événement',
                'attr' => [
                    'class' => 'bg-gray-100 border border-gray-300 rounded-lg p-2 text-sm w-full focus:ring-blue-500 focus:border-blue-500'
                ]
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Event::class,
        ]);
    }
}
