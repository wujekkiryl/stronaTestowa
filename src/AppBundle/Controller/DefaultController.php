<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Task;
use AppBundle\Form\Type\TaskType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
//use Symfony\Component\Form\Extension\Core\Type\TextType;
//use Symfony\Component\Form\Extension\Core\Type\DateType;
//use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
   /* public function indexAction()
    {
        return $this->render('default/index.html.twig');
    }

    public function newAction()
	{
	$form = $this->createFormBuilder($task)
    ->setAction($this->generateUrl('target_route'))
    ->setMethod('GET')
    ->add('task', TextType::class)
    ->add('dueDate', DateType::class)
    ->add('save', SubmitType::class)
    ->getForm();
    $task = ...;
    $form = $this->createForm(TaskType::class, $task);

    */
	public function newAction(Request $request)
    {
        // tworzymy zadanie i nadajemy mu jakieś dane testowe dla tego przykladu
        $task = new Task();
        $task->setTask('Write a blog post');
        $task->setDueDate('tomorrow');

        $form = $this->createFormBuilder($task)
            ->add('task', 'text')
            ->add('dueDate', 'text')
            ->add('save', 'submit')
            ->getForm();

        return $this->render('default/new.html.twig', array(
            'form' => $form->createView(),
        ));
    }    
}
