<?php

namespace Louvre\ResaBundle\Form;

use Louvre\ResaBundle\Form\VisiteurType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ReservationType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('dateResa', TextType::class)
            ->add('typeTicket', ChoiceType::class, array(
                    'choices'  => array(
                        'Journée' => true,
                        'Demi-journée' => false,
                    ),
            ))
            ->add('visiteurs', CollectionType::class, array(
                'entry_type'   => VisiteurType::class,
                'allow_add'    => true,
                'allow_delete' => true
            ))
            
            ->add('email', EmailType::class)        
            ;
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Louvre\ResaBundle\Entity\Reservation'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'louvre_resabundle_reservation';
    }


}
