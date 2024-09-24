<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\Regex;
use Symfony\Component\Validator\Constraints\IsTrue;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;

class RegistrationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('username', TextType::class, [
                'label' => 'Nom d\'utilisateur',
                'constraints' => [
                    new NotBlank([
                        'message' => 'Le nom d’utilisateur est obligatoire.',
                    ]),
                    new Regex([
                        'pattern' => '/^[a-zA-Z0-9]+$/',
                        'message' => 'Le nom d’utilisateur ne doit contenir que des lettres et des chiffres.',
                    ]),
                ],
                'attr' => [
                    'placeholder' => 'Entrez votre nom d’utilisateur',
                    'class' => 'form-input',
                ],
            ])
            ->add('email', EmailType::class, [
                'attr' => [
                    'class' => 'p-2 block w-full appearance-none rounded-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm',
                    'placeholder' => 'toi@exemple.com',
                ],
                'invalid_message' => 'Un compte existe déjà avec cette adresse e-mail.',
            ])
            ->add('roles', ChoiceType::class, [
                'choices' => [
                    'Maître de Jeu' => 'ROLE_MJ',
                    'Joueur' => 'ROLE_JOUEUR',
                ],
                'multiple' => true,
                'expanded' => true,
                'label' => 'Roles',
                'label_attr' => [
                    'class' => 'block text-sm font-medium text-gray-700',
                ],
                'attr' => [
                    'class' => 'flex items-center space-x-2 font-bold text-white',
                ],
                'choice_attr' => [
                    'ROLE_MJ' => ['class' => 'h-4 w-4 text-indigo-600 focus:ring-indigo-500 rounded border-gray-300'],
                    'ROLE_JOUEUR' => ['class' => 'h-4 w-4 text-indigo-600 focus:ring-indigo-500 rounded border-gray-300'],
                ],
                'constraints' => [
                    new NotBlank(['message' => 'Veuillez sélectionner au moins un rôle.']),
                ],
            ])
            ->add('agreeTerms', CheckboxType::class, [
                'mapped' => false,
                'label' => 'J\'accepte les conditions générales.',
                'label_attr' => [
                    'class' => 'text-sm text-gray-900',
                    'style' => 'font-size: .9em;',
                ],
                'attr' => [
                    'class' => 'h-4 w-4 text-indigo-600 focus:ring-indigo-500 rounded border-gray-300',
                ],
                'constraints' => [
                    new IsTrue([
                        'message' => 'Vous devez accepter les conditions générales d\'utilisation.',
                    ]),
                ],
            ])
            ->add('password', RepeatedType::class, [
                'type' => PasswordType::class,
                'invalid_message' => "Les mots de passe doivent être identiques !",
                'required' => true,
                'first_options' => [
                    'attr' => [
                        'class' => 'p-2 block w-full appearance-none rounded-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm',
                        'placeholder' => 'Mot de passe'
                    ],
                ],
                'second_options' => [
                    'attr' => [
                        'class' => 'p-2 block w-full appearance-none rounded-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm',
                        'placeholder' => 'Confirmer le mot de passe'
                    ],
                ],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Veuillez saisir un mot de passe',
                    ]),
                    new Length([
                        'min' => 6,
                        'minMessage' => 'Votre mot de passe doit comporter au moins {{ limit }} caractères',
                        'max' => 4096,
                    ]),
                ],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
