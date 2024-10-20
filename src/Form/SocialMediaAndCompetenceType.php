<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\Regex;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class SocialMediaAndCompetenceType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('discordPseudo', TextType::class, [
                'label' => 'Pseudo Discord',
                'required' => false,
                'constraints' => [
                    new Regex([
                        'pattern' => '/^[a-zA-Z0-9._-]{3,32}$/',
                        'message' => 'Veuillez entrer un pseudo Discord valide (3 à 32 caractères, sans #)',
                    ]),
                ],
                'attr' => [
                    'class' => 'block w-full rounded-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm',
                    'placeholder' => 'Votre pseudo Discord',
                ],
            ])
            ->add('TwitterPseudo', TextType::class, [
                'label' => 'Pseudo Twitter',
                'required' => false,
                'constraints' => [
                    new Regex([
                        'pattern' => '/^@?(\w){1,15}$/',
                        'message' => 'Veuillez entrer un pseudo Twitter valide, exemple: @username'
                    ])
                ],
                'attr' => [
                    'class' => 'block w-full rounded-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm',
                    'placeholder' => '@username',
                ],
            ])
            ->add('roll20Pseudo', TextType::class, [
                'label' => 'Lien de chaîne Twitch',
                'required' => false,
                'attr' => [
                    'class' => 'block w-full rounded-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm',
                    'placeholder' => 'https://www.twitch.tv/...'
                ],
            ])
            ->add('competence', TextareaType::class, [
                'required' => false,
                'attr' => [
                    'class' => 'block w-full rounded-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm',
                    'placeholder' => 'Décrivez vos compétences en tant que joueur ou MJ',
                ],
            ])
            ->add('bio', TextareaType::class, [
                'required' => false,
                'attr' => [
                    'class' => 'block w-full rounded-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm',
                    'placeholder' => 'Parlez un peu de vous',
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
