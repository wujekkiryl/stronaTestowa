<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Task;
use AppBundle\Form\Type\LogowanieType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class DefaultController extends Controller
{
    /**
     * @Route("/admin")
     */
    public function adminAction()
    {
        return $this->render('default/admin.html.twig');
    }

    /**
     * @Route("/", name="homepage")
     */
    public function newAction(Request $request)
	{
	$loguj = new Task();
	$form = $this->createFormBuilder($loguj)
	    ->add('login', 'text')
	    ->add('haslo', 'password')
	    ->add('Zaloguj', 'submit')
	    ->getForm();
        return $this->render('default/form.html.twig',array(
        'form' => $form->createView(),
        ));    
        }
        
    /**
     * @Route("/ankieta", name="ankieta")
     */    
    public function ankietaAction()
    {
        //$login = $form->get('login')->getData();
        //$osoba = new Osoba();
        //$osoba = $this->getDoctrine()
        //->getRepository('AppBundle:Osoba')
        //->findOneByLogin($login);
        //$osoba = $session->get('user', array());

        return $this->render('default/ankieta.html.twig');    
    }    
}
