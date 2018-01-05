<?php
namespace AppBundle\Entity;

class Task
{
    protected $login;
    protected $haslo;

    public function getLogin()
    {
        return $this->login;
    }

    public function setLogin($login)
    {
        $this->login = $login;
    }

    public function getHaslo()
    {
        return $this->haslo;
    }
    
    public function setHaslo($haslo)
    {
        $this->haslo = $haslo;
    }
}
?>