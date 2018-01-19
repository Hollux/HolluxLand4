<?php

namespace App\Form\Divers;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type;
use Symfony\Component\Validator\Constraints as Assert;
use App\Form\Tools\ReCaptchaType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;

class CollectionWuwType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('forms', CollectionType::class, [
                'entry_type' => WuwType::class,
                'allow_add' => true,
                'allow_delete' => true,
                'prototype' => true,
                'entry_options'  => [
                    'attr'      => ['class' => 'my-selector']
                ]
            ] );
    }

    public function getName()
    {
        return 'WuwDivers';
    }

}