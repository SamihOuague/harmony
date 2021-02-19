<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use App\Entity\Prospect;

class RappelFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('fullname', TextType::class, [
                "label" => false,
                "required" => true,
                "attr" => [
                    "placeholder" => "Votre NOM & Prenom",
                    "class" => "form-control border-bottom border-muted",
                    "style" => "margin: 25px 0; border: none;",
                ]
            ])
            ->add('phone', TextType::class, [
                "label" => false,
                "required" => true,
                "attr" => [
                    "placeholder" => "Votre numero de telephone",
                    "class" => "form-control border-bottom border-muted",
                    "style" => "margin: 25px 0; border: none;",
                ]
            ])
            ->add('email', EmailType::class, [
                "label" => false,
                "required" => false,
                "attr" => [
                    "placeholder" => "Votre adresse e-mail",
                    "class" => "form-control border-bottom border-muted",
                    "style" => "margin: 25px 0; border: none;",
                ]
            ])
            ->add('agrees', CheckboxType::class, [
                "label" => false,
                "mapped" => false,
                "required" => true,
                "attr" => [
                    "style" => "margin: 3px 10px 0px 0px;"
                ]
            ])
            ->add('Valider', SubmitType::class, [
                "attr" => [
                    "class" => "form-control btn btn-success form-control",
                    "style" => "margin: 25px 0; border: none; font-size: 21px;"
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Prospect::class
        ]);
    }
}
