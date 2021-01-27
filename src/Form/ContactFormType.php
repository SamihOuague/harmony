<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class ContactFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('full_name', TextType::class, [
                "label" => false,
                "required" => true,
                "attr" => [
                    "placeholder" => "NOM & Prénom",
                    "class" => "form-control",
                    "style" => "margin-top: 10px;"
                ]
            ])
            ->add('email', EmailType::class, [
                "label" => false,
                "required" => true,
                "attr" => [
                    "placeholder" => "Adresse e-mail",
                    "class" => "form-control",
                    "style" => "margin-top: 10px;"
                ]
            ])
            ->add('phone', TelType::class, [
                "label" => false,
                "required" => true,
                "attr" => [
                    "placeholder" => "Numéro de téléphone",
                    "class" => "form-control",
                    "style" => "margin-top: 10px;"
                ]
            ])
            ->add('subject', TextType::class, [
                "label" => false,
                "required" => true,
                "attr" => [
                    "placeholder" => "Sujet",
                    "class" => "form-control",
                    "style" => "margin-top: 10px;"
                ]
            ])
            ->add('message', TextareaType::class, [
                "label" => false,
                "required" => true,
                "attr" => [
                    "placeholder" => "Votre message",
                    "class" => "form-control",
                    "style" => "margin-top: 10px;"
                ]
            ])
            ->add('Envoyer', SubmitType::class, [
                "attr" => [
                    "class" => "form-control btn btn-success",
                    "style" => "margin-top: 10px;"
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}
