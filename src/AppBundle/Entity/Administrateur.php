<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Administrateur
 *
 * @ORM\Table(name="administrateur")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\AdministrateurRepository")
 */
class Administrateur
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="login_admin", type="string", length=25)
     */
    private $loginAdmin;

    /**
     * @var string
     *
     * @ORM\Column(name="password_admin", type="string", length=25)
     */
    private $passwordAdmin;


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
     * Set loginAdmin
     *
     * @param string $loginAdmin
     * @return Administrateur
     */
    public function setLoginAdmin($loginAdmin)
    {
        $this->loginAdmin = $loginAdmin;

        return $this;
    }

    /**
     * Get loginAdmin
     *
     * @return string 
     */
    public function getLoginAdmin()
    {
        return $this->loginAdmin;
    }

    /**
     * Set passwordAdmin
     *
     * @param string $passwordAdmin
     * @return Administrateur
     */
    public function setPasswordAdmin($passwordAdmin)
    {
        $this->passwordAdmin = $passwordAdmin;

        return $this;
    }

    /**
     * Get passwordAdmin
     *
     * @return string 
     */
    public function getPasswordAdmin()
    {
        return $this->passwordAdmin;
    }
}
