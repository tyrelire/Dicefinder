<?php

namespace App\Form;

use App\Entity\GroupeJDR;
use App\Entity\User;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
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
            ->add('created_at', null, [
                'widget' => 'single_text',
            ])
            ->add('edit_at', null, [
                'widget' => 'single_text',
            ])
            ->add('maxPlayer')
            ->add('players', EntityType::class, [
                'class' => User::class,
                'choice_label' => 'id',
                'multiple' => true,
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => GroupeJDR::class,
        ]);
    }
}
