<?php
namespace AppBundle\Entity;


 use Doctrine\ORM\Mapping as ORM;

 /**
  * @ORM\Entity
  * @ORM\Table(name="osoba")
  */
 class Product
 {
     /**
      * @ORM\Column(type="integer")
      * @ORM\Id
      * @ORM\GeneratedValue(strategy="AUTO")
      */
     protected $id;

     /**
      * @ORM\Column(type="string", length=100)
      */
     protected $imie;

     /**
      * @ORM\Column(type="string", length=100)
      */
     protected $nazwisko;

     /**
      * @ORM\Column(type="integer")
      */
     protected $wiek;
 }