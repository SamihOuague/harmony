<?php

namespace App\Form;

use App\Entity\Programme;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;


class ProgrammeFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title', TextType::class, [
                "required" => true,
            ])
            ->add('ville', TextType::class, [
                "required" => true,
            ])
            ->add('subtitle', TextType::class, [
                "required" => false,
            ])
            ->add('text', TextareaType::class, [
                "required" => false,
            ])
            ->add('subtitle2', TextType::class, [
                "required" => false,
            ])
            ->add('text2', TextareaType::class, [
                "required" => false,
            ])
            ->add('miniature', FileType::class, [
                "mapped" => false,
                "required" => false,
            ])
            ->add('img1', FileType::class, [
                "mapped" => false,
                "required" => false,
            ])
            ->add('img2', FileType::class, [
                "mapped" => false,
                "required" => false,
            ])
            ->add('departement', IntegerType::class, [
                "required" => true,
            ])
            ->add('tag', TextType::class, [
                "required" => true,
            ])
            ->add('coords', TextType::class, [
                "required" => false,
            ])
            ->add('isPrestige', CheckboxType::class, [
                "required" => false,
            ])
            ->add('Submit', SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Programme::class,
        ]);
    }
}
