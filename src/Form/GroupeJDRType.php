<?php

namespace App\Form;

use App\Entity\User;
use App\Entity\Category;
use App\Entity\GroupeJDR;
use App\Entity\LicenceJDR;
use Symfony\Component\Form\FormError;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\TypeInfo\Type\CollectionType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Validator\Context\ExecutionContextInterface;

class GroupeJDRType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $isEdit = $options['is_edit'];

        $builder
            ->add('title', null, [
                'label' => false,
                'attr' => [
                    'placeholder' => 'Entrez le titre de votre Univers (29 caractères max.)',
                    'maxlength' => 29,
                ],
            ])
            ->add('description', TextareaType::class, [
                'attr' => [
                    'rows' => 6,
                    'maxlength' => 750,
                    'placeholder' => 'Résumé de l’histoire de votre Univers, décrivez brièvement l’intrigue',
                ],
                'label' => false,
            ])
            ->add('picture', FileType::class, [
                'label' => 'Bannière du JDR',
                'mapped' => false,
                'required' => !$isEdit,
                'attr' => [
                    'accept' => 'image/*',
                    'placeholder' => 'Sélectionnez une image (SVG, PNG, JPG ou GIF)',
                ],
            ])
            ->add('maxPlayer', null, [
                'label' => false,
                'attr' => [
                    'type' => 'number',
                    'placeholder' => 'Nombre maximum de participants',
                    'min' => 1,
                    'max' => 15,
                ],
            ])
            ->add('categories', EntityType::class, [
                'class' => Category::class,
                'choice_label' => 'name',
                'multiple' => true,
                'expanded' => true,
                'required' => false,
                'attr' => [
                    'data-max-selection' => 3,
                    'class' => 'flex flex-wrap gap-2',
                ],
            ])
            ->add('licence', EntityType::class, [
                'class' => LicenceJDR::class,
                'choice_label' => 'name',
                'label' => false,
                'required' => false,
                'placeholder' => 'Choisissez une licence',
            ])
            ->add('recrutement', CheckboxType::class, [
                'label' => 'Activer le recrutement',
                'required' => false,
                'attr' => [
                    'class' => 'toggle-checkbox',
                ],
                'data' => true,
            ])
            ->add('informations', TextareaType::class, [
                'label' => false,
                'required' => false,
                'attr' => [
                    'rows' => 6,
                    'maxlength' => 750,
                    'placeholder' => 'Informations techniques sur le JDR pour les utilisateurs',
                ],
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

        $builder->addEventListener(FormEvents::POST_SUBMIT, function (FormEvent $event) {
            $form = $event->getForm();
            $data = $event->getData();

            if ($data) {
                if (!$data->getLicence() && count($data->getCategories()) === 0) {
                    $form->addError(new FormError('Vous devez sélectionner une licence ou au moins une catégorie.'));
                } elseif ($data->getLicence() && count($data->getCategories()) > 0) {
                    $form->addError(new FormError('Vous ne pouvez pas sélectionner une licence et des catégories en même temps.'));
                }
            }
        });
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => GroupeJDR::class,
            'csrf_protection' => true,
            'csrf_field_name' => '_token',
            'csrf_token_id' => 'groupe_jdr',
            'is_edit' => false,
        ]);
    }
}
