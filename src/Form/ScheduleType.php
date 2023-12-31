<?php

namespace App\Form;

use App\Entity\Schedule;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class ScheduleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('monday', TextType::class, [
                'attr' => [
                    'class' => 'form-control',
                    'minlenght' => '2',
                    'maxlenght' => '190',
                ],
                'label' => 'Horaire du lundi midi',
                'label_attr' => [
                    'class' => 'form-label  mt-4'
                ],
                
            ])
            ->add('tuesday', TextType::class, [
                'attr' => [
                    'class' => 'form-control',
                    'minlenght' => '2',
                    'maxlenght' => '190',
                ],
                'label' => 'Horaire du mardi midi',
                'label_attr' => [
                    'class' => 'form-label  mt-4'
                ],
                
            ])
            ->add('wednesday', TextType::class, [
                'attr' => [
                    'class' => 'form-control',
                    'minlenght' => '2',
                    'maxlenght' => '190',
                ],
                'label' => 'Horaire du mercredi midi',
                'label_attr' => [
                    'class' => 'form-label  mt-4'
                ],
                
            ])
            ->add('thursday', TextType::class, [
                'attr' => [
                    'class' => 'form-control',
                    'minlenght' => '2',
                    'maxlenght' => '190',
                ],
                'label' => 'Horaire du jeudi midi',
                'label_attr' => [
                    'class' => 'form-label  mt-4'
                ],
                
            ])
            ->add('friday', TextType::class, [
                'attr' => [
                    'class' => 'form-control',
                    'minlenght' => '2',
                    'maxlenght' => '190',
                ],
                'label' => 'Horaire du vendredi midi',
                'label_attr' => [
                    'class' => 'form-label  mt-4'
                ],
                
            ])
            ->add('saturday', TextType::class, [
                'attr' => [
                    'class' => 'form-control',
                    'minlenght' => '2',
                    'maxlenght' => '190',
                ],
                'label' => 'Horaire du samedi midi',
                'label_attr' => [
                    'class' => 'form-label  mt-4'
                ],
                
            ])
            ->add('sunday', TextType::class, [
                'attr' => [
                    'class' => 'form-control',
                    'minlenght' => '2',
                    'maxlenght' => '190',
                ],
                'label' => 'Horaire du dimanche midi',
                'label_attr' => [
                    'class' => 'form-label  mt-4'
                ],
                
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Schedule::class,
        ]);
    }
}