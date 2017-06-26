<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Langue
 *
 * @ORM\Table(name="langue")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\LangueRepository")
 */
class Langue
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
     * @ORM\Column(name="nom_langue", type="string", length=25)
     */
    private $nomLangue;


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
     * Set nomLangue
     *
     * @param string $nomLangue
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
