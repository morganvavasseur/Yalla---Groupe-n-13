<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Redacteur
 *
 * @ORM\Table(name="redacteur")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\RedacteurRepository")
 */
class Redacteur
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
     * @ORM\Column(name="login_redacteur", type="string", length=25)
     */
    private $loginRedacteur;

    /**
     * @var string
     *
     * @ORM\Column(name="password_redacteur", type="string", length=50)
     */
    private $passwordRedacteur;

    /**
     * @var string
     *
     * @ORM\Column(name="photo_redacteur", type="string", length=255)
     */
    private $photoRedacteur;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_redacteur", type="string", length=25)
     */
    private $nomRedacteur;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom_redacteur", type="string", length=25)
     */
    private $prenomRedacteur;

    /**
     * @var string
     *
     * @ORM\Column(name="email_redacteur", type="string", length=50)
     */
    private $emailRedacteur;

    /**
     * @var int
     *
     * @ORM\Column(name="id_fonction", type="integer")
     */
    private $idFonction;


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
     * Set loginRedacteur
     *
     * @param string $loginRedacteur
     * @return Redacteur
     */
    public function setLoginRedacteur($loginRedacteur)
    {
        $this->loginRedacteur = $loginRedacteur;

        return $this;
    }

    /**
     * Get loginRedacteur
     *
     * @return string 
     */
    public function getLoginRedacteur()
    {
        return $this->loginRedacteur;
    }

    /**
     * Set passwordRedacteur
     *
     * @param string $passwordRedacteur
     * @return Redacteur
     */
    public function setPasswordRedacteur($passwordRedacteur)
    {
        $this->passwordRedacteur = $passwordRedacteur;

        return $this;
    }

    /**
     * Get passwordRedacteur
     *
     * @return string 
     */
    public function getPasswordRedacteur()
    {
        return $this->passwordRedacteur;
    }

    /**
     * Set photoRedacteur
     *
     * @param string $photoRedacteur
     * @return Redacteur
     */
    public function setPhotoRedacteur($photoRedacteur)
    {
        $this->photoRedacteur = $photoRedacteur;

        return $this;
    }

    /**
     * Get photoRedacteur
     *
     * @return string 
     */
    public function getPhotoRedacteur()
    {
        return $this->photoRedacteur;
    }

    /**
     * Set nomRedacteur
     *
     * @param string $nomRedacteur
     * @return Redacteur
     */
    public function setNomRedacteur($nomRedacteur)
    {
        $this->nomRedacteur = $nomRedacteur;

        return $this;
    }

    /**
     * Get nomRedacteur
     *
     * @return string 
     */
    public function getNomRedacteur()
    {
        return $this->nomRedacteur;
    }

    /**
     * Set prenomRedacteur
     *
     * @param string $prenomRedacteur
     * @return Redacteur
     */
    public function setPrenomRedacteur($prenomRedacteur)
    {
        $this->prenomRedacteur = $prenomRedacteur;

        return $this;
    }

    /**
     * Get prenomRedacteur
     *
     * @return string 
     */
    public function getPrenomRedacteur()
    {
        return $this->prenomRedacteur;
    }

    /**
     * Set emailRedacteur
     *
     * @param string $emailRedacteur
     * @return Redacteur
     */
    public function setEmailRedacteur($emailRedacteur)
    {
        $this->emailRedacteur = $emailRedacteur;

        return $this;
    }

    /**
     * Get emailRedacteur
     *
     * @return string 
     */
    public function getEmailRedacteur()
    {
        return $this->emailRedacteur;
    }

    /**
     * Set idFonction
     *
     * @param integer $idFonction
     * @return Redacteur
     */
    public function setIdFonction($idFonction)
    {
        $this->idFonction = $idFonction;

        return $this;
    }

    /**
     * Get idFonction
     *
     * @return integer 
     */
    public function getIdFonction()
    {
        return $this->idFonction;
    }
}
