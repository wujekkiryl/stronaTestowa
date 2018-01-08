<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Entity\User as BaseUser;

/**
 * Users
 * @ORM\Entity
 * @ORM\Table(name="osoby")
 * 
 */
class User extends BaseUser
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="imie", type="string", length=64)
     */
    protected $imie;

    /**
     * @var string
     *
     * @ORM\Column(name="nazwisko", type="string", length=64)
     */
    protected $nazwisko;

    /**
     * @var integer
     *
     * @ORM\Column(name="wiek", type="integer")
     */
    protected $wiek;

    /**
     * @var string
     *
     * @ORM\Column(name="<return>", type="string", length=255)
     */


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set login
     *
     * @param string $login
     * @return Users
     */

    /**
     * Set imie
     *
     * @param string $imie
     * @return Users
     */
    public function setImie($imie)
    {
        $this->imie = $imie;

        return $this;
    }

    /**
     * Get imie
     *
     * @return string 
     */
    public function getImie()
    {
        return $this->imie;
    }

    /**
     * Set nazwisko
     *
     * @param string $nazwisko
     * @return Users
     */
    public function setNazwisko($nazwisko)
    {
        $this->nazwisko = $nazwisko;

        return $this;
    }

    /**
     * Get nazwisko
     *
     * @return string 
     */
    public function getNazwisko()
    {
        return $this->nazwisko;
    }

    /**
     * Set wiek
     *
     * @param integer $wiek
     * @return Users
     */
    public function setWiek($wiek)
    {
        $this->wiek = $wiek;

        return $this;
    }

    /**
     * Get wiek
     *
     * @return integer 
     */
    public function getWiek()
    {
        return $this->wiek;
    }

}
