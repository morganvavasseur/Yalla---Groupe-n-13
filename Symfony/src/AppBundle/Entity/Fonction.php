<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Fonction
 *
 * @ORM\Table(name="fonction")
 * @ORM\Entity
 */
class Fonction
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_fonction", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idFonction;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_fonction", type="string", length=50, nullable=false)
     */
    private $nomFonction;



    /**
     * Get idFonction
     *
     * @return integer 
     */
    public function getIdFonction()
    {
        return $this->idFonction;
    }

    /**
     * Set nomFonction
     *
     * @param string $nomFonction
     * @return Fonction
     */
    public function setNomFonction($nomFonction)
    {
        $this->nomFonction = $nomFonction;

        return $this;
    }

    /**
     * Get nomFonction
     *
     * @return string 
     */
    public function getNomFonction()
    {
        return $this->nomFonction;
    }
}
