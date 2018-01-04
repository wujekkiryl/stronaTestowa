<?php
namespace AppBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
class Logowanie extends AbstractType
{
	public function getName() {
        return 'Logowanie';
    }
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('login', 'text')
            ->add('haslo', 'password')
            ->add('Zaloguj', 'submit')
        ;
    }
    /*public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\logowanie'
        ));*/
    }
}
?>