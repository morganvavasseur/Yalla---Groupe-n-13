<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Publication
 *
 * @ORM\Table(name="publication")
 * @ORM\Entity
 */
class Publication
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_publication", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPublication;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_publication", type="string", length=50, nullable=false)
     */
    private $nomPublication;



    /**
     * Get idPublication
     *
     * @return integer
     */
    public function getIdPublication()
    {
        return $this->idPublication;
    }

    /**
     * Set nomPublication
     *
     * @param string $nomPublication
     *
     * @return Publication
     */
    public function setNomPublication($nomPublication)
    {
        $this->nomPublication = $nomPublication;

        return $this;
    }

    /**
     * Get nomPublication
     *
     * @return string
     */
    public function getNomPublication()
    {
        return $this->nomPublication;
    }
}
