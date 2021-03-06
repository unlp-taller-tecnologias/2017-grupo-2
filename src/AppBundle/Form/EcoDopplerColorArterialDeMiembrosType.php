<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class EcoDopplerColorArterialDeMiembrosType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('motivoSolicitud', EntityType::class, array(
          'class' => 'AppBundle:MotivoSolicitud',
          'choice_label' => 'nombre'))
        ->add('resultado')
        // Se exploraron en ambos miembros inferiores, visualizando las arterias femoral común, femoral
        // superficial, femoral profunda, poplitea y tibiales anterior y posterior.
        ->add('conclusion')
        ->add('arteriafemoralComunIzq')->add('arteriaFemoralSuperficialIzq')->add('arteriaPopliteaIzq')->add('arteriaTibialAnteriorIzq')->add('arteriaTibialPosteriorIzq')->add('arteriafemoralComunDer')->add('arteriaFemoralSuperficialDer')->add('arteriaPopliteaDer')->add('arteriaTibialAnteriorDer')->add('arteriaTibialPosteriorDer')
        ->add('grupoDiagnostico', EntityType::class, array(
          'class' => 'AppBundle:GrupoDiagnostico',
          'choice_label' => 'nombre',
          'multiple' => true)
          )
        ->add('internacion', ChoiceType::class, array(
        'choices'  => array('Abulatorio' => 'Abulatorio', 'Internado' => 'Internado')));
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\EcoDopplerColorArterialDeMiembros'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_ecodopplercolorarterialdemiembros';
    }


}
