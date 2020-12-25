<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RegisterType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            //validation formulaire
            ->add('firstname', TextType::class, [
                'label' => 'Votre prénom',
                'attr' => [
                    'placeholder' => 'Merci de saisir votre prénom'
                ]

            ])
            ->add('lastname', TextType::class, [
                'label' => 'Votre nom',
                'attr' => [
                    'placeholder' => 'Merci de saisir votre nom'
                ]

            ])
            ->add('email', EmailType::class, [
                'label' => 'Votre  Email',
                'attr' => [
                    'placeholder' => 'Merci de saisir votre  Email'
                ]

            ])
            //->add('roles')
            ->add('password', PasswordType::class, [
                'label' => 'Votre  Password',
                'attr' => [
                    'placeholder' => 'Merci de saisir votre  Password'
                ]

            ])

            ->add('password_confirm', PasswordType::class, [
                'label' => "password_confirm!",
                'mapped' => false,
                'attr' => [
                    'placeholder' => 'Merci de Password_confirm!'
                ]
            ])

            ->add('submit', SubmitType::class, [
                'label' => "S'inscrire"
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
