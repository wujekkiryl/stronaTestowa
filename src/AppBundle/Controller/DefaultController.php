<?php

namespace AppBundle\Controller;

use AppBundle\form\Type\ImieType;
use AppBundle\form\Type\NazwiskoType;
use AppBundle\form\Type\WiekType;
use FOS\UserBundle\Entity\UserManager;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Form\Form;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;


class DefaultController extends Controller
{

    /**
     * @Route("/admin")
     */
    public function adminAction(Request $request)
    {
        $em    = $this->getDoctrine()->getManager();
        $dql   = "SELECT a FROM AppBundle:User a";
        $query = $em->createQuery($dql);

        $paginator  = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $query, /* query NOT result */
            $request->query->getInt('page', 1)/*page number*/,
            10/*limit per page*/
    );
        return $this->render('default/admin.html.twig', array('pagination' => $pagination));
    }

  
    /**
    * @Route("/imie")
    */
    public function imieAction()
    {
        $form = $this->createForm(new ImieType());
        return $this->render('default/imie.html.twig',array('form' => $form->createView()));

    }

        /**
        * @Route("/nazwisko") name="nazwisko"
        */
    public function nazwiskoAction()
    {
        $form = $this->createForm(new NazwiskoType());
        return $this->render('default/nazwisko.html.twig',array('form' => $form->createView()));
    
    }


    /**
    * @Route("/wiek")
    */
    public function wiekAction()
    {
        $form = $this->createForm(new WiekType());
        return $this->render('default/wiek.html.twig',array('form' => $form->createView()));
    
    }

    /**
     * @Route("/", name="homepage")
     */
    public function newAction()
	{
        return $this->redirectToRoute('fos_user_security_login');    
    }

    /**
    * @Route("/dodajimie", name="dodajimie")
    */
    public function dodajimieAction(Request $request)
    {
        $form = $this->createForm(new ImieType());
        $userManager = $this->container->get('fos_user.user_manager');
        $user = $this->get('security.context')->getToken()->getUser();
        if ($request->getMethod() == 'POST') 
        {
            $form->handleRequest($request);
            $data = $form->getData();
            $user->setImie($data['imie']);
        }
        

        $userManager->updateUser($user);
        return $this->redirectToRoute('nazwisko');   
    }

    /**
    * @Route("/dodajnazwisko", name="dodajnazwisko")
    */
    public function dodajnazwiskoAction(Request $request)
    {
        $form = $this->createForm(new NazwiskoType());
        $userManager = $this->container->get('fos_user.user_manager');
        $user = $this->get('security.context')->getToken()->getUser();
        if ($request->getMethod() == 'POST') 
        {
            $form->handleRequest($request);
            $data = $form->getData();
            $user->setNazwisko($data['nazwisko']);
        }   
        

        $userManager->updateUser($user);
        return $this->redirectToRoute('wiek');
    }

    /**
    * @Route("/dodajwiek", name="dodajwiek")
    */
    public function dodajwiekAction(Request $request)
    {
        $form = $this->createForm(new WiekType());
        $userManager = $this->container->get('fos_user.user_manager');
        $user = $this->get('security.context')->getToken()->getUser();
        if ($request->getMethod() == 'POST') 
        {
            $form->handleRequest($request);
            $data = $form->getData();
            $user->setWiek($data['wiek']);
        }   
        

        $userManager->updateUser($user);
        return $this->redirectToRoute('ankieta'); 
    }
        
    /**
     * @Route("/ankieta", name="ankieta")
     */    
    public function ankietaAction()
    {

        return $this->render('default/ankieta.html.twig');    
    }    
}
