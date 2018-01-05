<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Task;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;


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
    public function newAction()
	{
        return $this->redirect('/stronaTestowa/web/app_dev.php/login');    
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
