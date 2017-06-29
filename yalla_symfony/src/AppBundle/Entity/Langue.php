<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Langue
 *
 * @ORM\Table(name="langue")
 * @ORM\Entity
 */
class Langue
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_langue", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idLangue;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_langue", type="string", length=50, nullable=false)
     */
    private $nomLangue;



    /**
     * Get idLangue
     *
     * @return integer
     */
    public function getIdLangue()
    {
        return $this->idLangue;
    }

    /**
     * Set nomLangue
     *
     * @param string $nomLangue
     *
     * @return Langue
     */
    public function setNomLangue($nomLangue)
    {
        $this->nomLangue = $nomLangue;

        return $this;
    }

    /**
     * Get nomLangue
     *
     * @return string
     */
    public function getNomLangue()
    {
        return $this->nomLangue;
    }
}
