<?php

namespace App\Form;

use App\Entity\User;
use App\Entity\Category;
use App\Entity\GroupeJDR;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class GroupeJDRType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title')
            ->add('description', TextareaType::class, [
                'attr' => ['rows' => 5],
                'label' => 'Description',
            ])
            ->add('picture', FileType::class, [
                'label' => 'Upload an Image',
                'mapped' => false,
                'required' => false,
                'attr' => ['accept' => 'image/*'],
            ])
            ->add('maxPlayer')
            ->add('categories', EntityType::class, [
                'class' => Category::class,
                'choice_label' => 'name',
                'multiple' => true,
                'expanded' => true,
                'attr' => [
                    'data-max-selection' => 3,
                    'class' => 'flex flex-wrap gap-2',
                ],
            ])
            ->add('status', ChoiceType::class, [
                'choices' => [
                    'Préparation' => 'preparation',
                    'Prêt à jouer' => 'pret_a_jouer',
                    'En cours' => 'en_cours',
                    'Complet' => 'complet',
                    'Pause' => 'pause',
                    'Terminé' => 'termine',
                    'Annulé' => 'annule',
                ],
                'placeholder' => 'Sélectionner un statut',
                'required' => true,
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => GroupeJDR::class,
        ]);
    }
}
