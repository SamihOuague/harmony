<?php
namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Image;
use App\Entity\Page;

class PageFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('titre', TextType::class, [
                'mapped' => false,
                'label' => false,
                "attr" => [
                    "class" => "form-control",
                    "style" => "margin-top: 15px;",
                    "placeholder" => "Titre de la page"
                ]
            ])
            ->add('numero', IntegerType::class, [
                'mapped' => false,
                'label' => false,
                "attr" => [
                    "class" => "form-control",
                    "style" => "margin-top: 15px;",
                    "placeholder" => "Numero de la page"
                ]
            ])
            ->add('page', FileType::class, [
                'mapped' => false,
                'label' => false,
                'constraints' => [
                    new Image([
                        'maxSize' => '30M',
                        'mimeTypes' => [
                            'image/png',
                            'image/gif',
                            'image/jpeg'
                        ],
                        'mimeTypesMessage' => 'Please upload a valid image file.',
                    ])
                ],
                "attr" => [
                    "class" => "form-control",
                    "style" => "margin-top: 15px;",
                    "placeholder" => "Plaquette de presentation"
                ]
            ])
            ->add('Ajouter', SubmitType::class, [
                "attr" => [
                    "style" => "margin-top: 15px;",
                    "class" => "btn btn-outline-success"
                ]
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Page::class,
        ]);
    }
}