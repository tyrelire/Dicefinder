<?php

namespace App\Form;

use App\Entity\User;
use App\Entity\Category;
use App\Entity\GroupeJDR;
use Symfony\Component\Form\AbstractType;
use phpDocumentor\Reflection\Types\Boolean;
use PhpParser\Node\Expr\BinaryOp\BooleanOr;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;

class GroupeJDRType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $isEdit = $options['is_edit'];

        $builder
            ->add('title')
            ->add('description', TextareaType::class, [
                'attr' => [
                    'rows' => 6,
                    'maxlength' => 750,
                ],
                'label' => 'Description',
            ])
            ->add('picture', FileType::class, [
                'label' => 'Upload an Image',
                'mapped' => false,
                'required' => !$isEdit,
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
            ->add('recrutement', CheckboxType::class, [
                'label'    => 'Activer le recrutement',
                'required' => false,
                'attr'     => [
                    'class' => 'toggle-checkbox',
                ],
                'data' => true,
            ])            
            ->add('events', CollectionType::class, [
                'entry_type' => EventType::class,
                'allow_add' => true,
                'allow_delete' => true,
                'by_reference' => false,
                'prototype' => true,
                'prototype_name' => '__name__',
                'label' => false,
            ])
            ->add('status', ChoiceType::class, [
                'choices' => [
                    'Nouveau' => 'nouveau',
                    'En cours' => 'en_cours',
                    'Terminé' => 'termine',
                ],
                'placeholder' => 'Sélectionner un statut',
                'required' => true,
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => GroupeJDR::class,
            'csrf_protection' => true,
            'csrf_field_name' => '_token',
            'csrf_token_id'   => 'groupe_jdr',
            'is_edit' => false,
        ]);
    }

}
