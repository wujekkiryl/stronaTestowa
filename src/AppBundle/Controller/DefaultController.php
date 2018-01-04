<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Entity\osoba;
 use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/app/example", name="homepage")
     */
    public function indexAction()
    {
        return $this->render('default/index.html.twig');
    }
    public function createAction()
 	{
	     $osoba = new Product();
	     $osoba->setImie('Jan');
	     $osoba->setNazwisko('Kowalski');
	     $osoba->setWiek(34);

	     $em = $this->getDoctrine()->getManager();

	     $em->persist($osoba);
	     $em->flush();

	     return new Response('Created osoba id '.$osoba->getId());
	 }
}
