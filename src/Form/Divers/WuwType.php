<?php

namespace App\Form\Divers;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type;
use Symfony\Component\Validator\Constraints as Assert;
use App\Form\Tools\ReCaptchaType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;

class WuwType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title', Type\TextType::class, ['label' => "Titre",
            'attr' => ['class' => 'form-info']])
            ->add('content', Type\TextareaType::class,
                ['constraints' => [new Assert\NotBlank()], 'attr' => [ 'class' => 'form-control',
                    'rows' => '5']])
            ->add('recaptcha', ReCaptchaType::class,
                ['label' => false])
        ;
    }

    public function getName()
    {
        return 'WuwDivers';
    }

}