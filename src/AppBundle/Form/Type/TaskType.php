<?php
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class TaskType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('task', 'text')
            ->add('dueDate', 'text')
            ->add('save', 'Submit')
        ;
    }
}
?>