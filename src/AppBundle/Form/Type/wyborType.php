<?php
namespace AppBundle\form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class wyborType extends AbstractType
{
    public function getName() 
    {
        return 'wybor';
    }
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('sortowanie', 'choice', array(
        'choices' => array('Imie' => 'imie', 'Nazwisko' => 'nazwisko', 'Wiek' => 'wiek'),
        'preferred_choices' => array('Imie'),
        ));
    }
}

?>