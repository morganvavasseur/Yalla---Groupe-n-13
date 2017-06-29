<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Redacteur
 *
 * @ORM\Table(name="redacteur", indexes={@ORM\Index(name="FK_Redacteur_id_fonction", columns={"id_fonction"})})
 * @ORM\Entity
 */
class Redacteur
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_redacteur", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idRedacteur;

    /**
     * @var string
     *
     * @ORM\Column(name="login_redacteur", type="string", length=25, nullable=false)
     */
    private $loginRedacteur;

    /**
     * @var string
     *
     * @ORM\Column(name="password_redacteur", type="string", length=50, nullable=false)
     */
    private $passwordRedacteur;

    /**
     * @var string
     *
     * @ORM\Column(name="photo_redacteur", type="string", length=50, nullable=true)
     */
    private $photoRedacteur;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_redacteur", type="string", length=25, nullable=false)
     */
    private $nomRedacteur;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom_redacteur", type="string", length=25, nullable=false)
     */
    private $prenomRedacteur;

    /**
     * @var string
     *
     * @ORM\Column(name="email_redacteur", type="string", length=25, nullable=false)
     */
    private $emailRedacteur;

    /**
     * @var \Fonction
     *
     * @ORM\ManyToOne(targetEntity="Fonction")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_fonction", referencedColumnName="id_fonction")
     * })
     */
    private $idFonction;



    /**
     * Get idRedacteur
     *
     * @return integer
     */
    public function getIdRedacteur()
    {
        return $this->idRedacteur;
    }

    /**
     * Set loginRedacteur
     *
     * @param string $loginRedacteur
     *
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
     *
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
     *
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
     *
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
     *
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
     *
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
     * @param \AppBundle\Entity\Fonction $idFonction
     *
     * @return Redacteur
     */
    public function setIdFonction(\AppBundle\Entity\Fonction $idFonction = null)
    {
        $this->idFonction = $idFonction;

        return $this;
    }

    /**
     * Get idFonction
     *
     * @return \AppBundle\Entity\Fonction
     */
    public function getIdFonction()
    {
        return $this->idFonction;
    }
}
