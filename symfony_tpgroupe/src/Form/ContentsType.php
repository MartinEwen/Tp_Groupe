<?php

namespace App\Form;

use App\Entity\Contents;
use App\Entity\Pages;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ContentsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('titleContent')
            ->add('content')
            ->add('page', EntityType::class, [
                'class' => Pages::class,
                'choice_label' => 'titlePage',
            ])
            ->add('fileOrder')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Contents::class,
        ]);
    }
}
