<?php

namespace XelSeleniusBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use XelSeleniusBundle\Entity\SupportTicket;

class SupportForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
//            ->add('user', UserRepository::class)
            ->add("title",TextType::class)
            ->add("description",TextareaType::class)
            ->add("type",TextType::class);

    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class'=>SupportTicket::class,
        ]);
    }

    public function getBlockPrefix()
    {
        return 'xel_selenius_bundle_support_form';
    }
}
