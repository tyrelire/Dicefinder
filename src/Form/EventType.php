<?php

namespace App\Form;

use DateTime;
use App\Entity\Event;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\CallbackTransformer;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;

class EventType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('specificDate', DateType::class, [
                'widget' => 'single_text',
                'label' => 'Date de l\'événement',
                'required' => true,
            ])
            ->add('eventTime', TextType::class, [
                'label' => 'Heure de l\'événement (format HH:mm)',
                'attr' => [
                    'placeholder' => 'HH:mm',
                    'class' => 'custom-time-input bg-white border border-neutral-300 rounded-lg p-2',
                ],
            ])
            ->add('duration', IntegerType::class, [
                'label' => 'Durée (en minutes)',
                'required' => false,
                'attr' => [
                    'placeholder' => 'Durée en minutes',
                ],
            ]);

        $builder->get('eventTime')->addModelTransformer(new CallbackTransformer(
            function ($time) {
                return $time instanceof \DateTime ? $time->format('H:i') : $time;
            },
            function ($timeString) {
                if (is_string($timeString)) {
                    $timeString = substr($timeString, 0, 5);
                }
                $dateTime = \DateTime::createFromFormat('H:i', $timeString);
                if ($dateTime === false) {
                    throw new \UnexpectedValueException('Format d\'heure invalide. Utilisez HH:mm.');
                }
                return $dateTime;
            }
        ));
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Event::class,
        ]);
    }
}
