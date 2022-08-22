<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RegisterType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom', TextType::class, 
                ['required' => true]
            )
            ->add('prenom', TextType::class, ['required' => true,])
            ->add('email', EmailType::class, ['required' => true])
            ->add('mobile', TextType::class, ['required' => false])
            ->add('password', TextType::class, ['required' => true,])
            ->add('passwordConfirm', TextType::class, ['required' => true,])
            ->add('domicile', TextType::class, ['required' => true,])
            ->add('city', TextType::class, ['required' => true,])
            ->add('number_domicile', TextType::class, ['required' => true,])
            ->add('postal_code', TextType::class, ['required' => true,])
            ->add('passwordConfirm', TextType::class, ['required' => true,]);
    }
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([]);
    }
}