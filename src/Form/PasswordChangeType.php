<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Length;

class PasswordChangeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('current_password', PasswordType::class, [
                'label' => 'Mot de passe actuel',
                'constraints' => [
                    new NotBlank(['message' => 'Veuillez entrer votre mot de passe actuel']),
                ],
                'attr' => [
                    'placeholder' => 'Mot de passe actuel',
                    'class' => 'form-input',
                ],
            ])
            ->add('new_password', PasswordType::class, [
                'label' => 'Nouveau mot de passe',
                'constraints' => [
                    new NotBlank(['message' => 'Veuillez entrer un nouveau mot de passe']),
                    new Length([
                        'min' => 6,
                        'minMessage' => 'Le mot de passe doit contenir au moins {{ limit }} caractères',
                    ]),
                ],
                'attr' => [
                    'placeholder' => 'Nouveau mot de passe',
                    'class' => 'form-input',
                ],
            ])
            ->add('confirm_password', PasswordType::class, [
                'label' => 'Confirmer le nouveau mot de passe',
                'constraints' => [
                    new NotBlank(['message' => 'Veuillez confirmer votre nouveau mot de passe']),
                ],
                'attr' => [
                    'placeholder' => 'Confirmer le mot de passe',
                    'class' => 'form-input',
                ],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([]);
    }
}
