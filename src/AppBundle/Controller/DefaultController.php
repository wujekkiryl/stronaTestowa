<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Task;
use AppBundle\Form\Type\LogowanieType;
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
	*/
    public function newAction(Request $request)
	{
	$loguj = new Task();
	$form = $this->createFormBuilder($loguj)
	    ->add('login', 'text')
	    ->add('haslo', 'password')
	    ->add('Zaloguj', 'submit')
	    ->getForm();
        return $this->render('default/form.html.twig', array(
            'form' => $form->createView(),
        ));
    }    
}
