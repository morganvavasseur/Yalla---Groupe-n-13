<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Article
 *
 * @ORM\Table(name="article", indexes={@ORM\Index(name="FK_Article_id_redacteur", columns={"id_redacteur"}), @ORM\Index(name="FK_Article_id_categorie", columns={"id_categorie"}), @ORM\Index(name="FK_Article_id_langue", columns={"id_langue"}), @ORM\Index(name="FK_Article_id_publication", columns={"id_publication"})})
 * @ORM\Entity
 */
class Article
{
    public function slugify($text)
    {
        // replace non letter or digits by -
        $text = preg_replace('#[^\\pL\d]+#u', '-', $text);

        // trim
        $text = trim($text, '-');

        // transliterate
        if (function_exists('iconv'))
        {
            $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
        }

        // lowercase
        $text = strtolower($text);

        // remove unwanted characters
        $text = preg_replace('#[^-\w]+#', '', $text);

        if (empty($text))
        {
            return 'n-a';
        }

        return $text;
    }

    public function __construct()
    {
        $this->dateArticle = new \DateTime('now');
        $this->versionArticle = 1;
    }

    /**
     * @var integer
     *
     * @ORM\Column(name="id_article", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idArticle;

    /**
     * @var string
     *
     * @ORM\Column(name="titre_article", type="string", length=100, nullable=false)
     * @Assert\NotBlank(message="Titre non spécifié")
     */
    private $titreArticle;

    /**
     * @var string
     *
     * @ORM\Column(name="slug_article", type="string", length=100, nullable=false)
     * @Assert\NotBlank(message="Slug non spécifié")
     */
    private $slugArticle;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_article", type="datetime", nullable=false)
     */
    private $dateArticle;

    /**
     * @var string
     *
     * @ORM\Column(name="fichier_article", type="string", length=255, nullable=true)
     */
    private $fichierArticle;

    /**
     * @var string
     *
     * @ORM\Column(name="image_article", type="string", length=255, nullable=true)
     *  @Assert\NotBlank(message="Image non spécifié")
     */
    private $imageArticle;

    /**
     * @var string
     *
     * @ORM\Column(name="paragraphe_article", type="text", length=65535, nullable=false)
     * @Assert\NotBlank(message="Contenu de l'article non spécifié")
     */
    private $paragrapheArticle;

    /**
     * @var integer
     *
     * @ORM\Column(name="version_article", type="integer", nullable=false)
     *  @Assert\NotBlank(message="Version non spécifié")
     */
    private $versionArticle;

    /**
     * @var \Categorie
     *
     * @ORM\ManyToOne(targetEntity="Categorie")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_categorie", referencedColumnName="id_categorie")
     * })
     * @Assert\NotBlank(message="Catégorie non spécifié")
     */
    private $idCategorie;

    /**
     * @var \Langue
     *
     * @ORM\ManyToOne(targetEntity="Langue")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_langue", referencedColumnName="id_langue")
     * })
     */
    private $idLangue;

    /**
     * @var \Publication
     *
     * @ORM\ManyToOne(targetEntity="Publication")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_publication", referencedColumnName="id_publication")
     * })
     * @Assert\NotBlank(message="Language non spécifié")
     */
    private $idPublication;

    /**
     * @var \Redacteur
     *
     * @ORM\ManyToOne(targetEntity="Redacteur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_redacteur", referencedColumnName="id_redacteur")
     * })
     *  @Assert\NotBlank(message="Publication non spécifié")
     */
    private $idRedacteur;



    /**
     * Get idArticle
     *
     * @return integer 
     */
    public function getIdArticle()
    {
        return $this->idArticle;
    }

    /**
     * Set titreArticle
     *
     * @param string $titreArticle
     * @return Article
     */
    public function setTitreArticle($titreArticle)
    {
        $this->titreArticle = $titreArticle;

        return $this;
    }

    /**
     * Get titreArticle
     *
     * @return string 
     */
    public function getTitreArticle()
    {
        return $this->titreArticle;
    }

    /**
     * Set slugArticle
     *
     * @param string $slugArticle
     * @return Article
     */
    public function setSlugArticle($slugArticle)
    {
        $this->slugArticle = $slugArticle;

        return $this;
    }

    /**
     * Get slugArticle
     *
     * @return string 
     */
    public function getSlugArticle()
    {
        return $this->slugArticle;
    }

    /**
     * Set dateArticle
     *
     * @param \DateTime $dateArticle
     * @return Article
     */
    public function setDateArticle($dateArticle)
    {
        $this->dateArticle = $dateArticle;

        return $this;
    }

    /**
     * Get dateArticle
     *
     * @return \DateTime 
     */
    public function getDateArticle()
    {
        return $this->dateArticle;
    }

    /**
     * Set fichierArticle
     *
     * @param string $fichierArticle
     * @return Article
     */
    public function setFichierArticle($fichierArticle)
    {
        $this->fichierArticle = $fichierArticle;

        return $this;
    }

    /**
     * Get fichierArticle
     *
     * @return string 
     */
    public function getFichierArticle()
    {
        return $this->fichierArticle;
    }

    /**
     * Set imageArticle
     *
     * @param string $imageArticle
     * @return Article
     */
    public function setImageArticle($imageArticle)
    {
        $this->imageArticle = $imageArticle;

        return $this;
    }

    /**
     * Get imageArticle
     *
     * @return string 
     */
    public function getImageArticle()
    {
        return $this->imageArticle;
    }

    /**
     * Set paragrapheArticle
     *
     * @param string $paragrapheArticle
     * @return Article
     */
    public function setParagrapheArticle($paragrapheArticle)
    {
        $this->paragrapheArticle = $paragrapheArticle;

        return $this;
    }

    /**
     * Get paragrapheArticle
     *
     * @return string 
     */
    public function getParagrapheArticle()
    {
        return $this->paragrapheArticle;
    }

    /**
     * Set versionArticle
     *
     * @param integer $versionArticle
     * @return Article
     */
    public function setVersionArticle($versionArticle)
    {
        $this->versionArticle = $versionArticle;

        return $this;
    }

    /**
     * Get versionArticle
     *
     * @return integer 
     */
    public function getVersionArticle()
    {
        return $this->versionArticle;
    }

    /**
     * Set idCategorie
     *
     * @param \AppBundle\Entity\Categorie $idCategorie
     * @return Article
     */
    public function setIdCategorie(\AppBundle\Entity\Categorie $idCategorie = null)
    {
        $this->idCategorie = $idCategorie;

        return $this;
    }

    /**
     * Get idCategorie
     *
     * @return \AppBundle\Entity\Categorie 
     */
    public function getIdCategorie()
    {
        return $this->idCategorie;
    }

    /**
     * Set idLangue
     *
     * @param \AppBundle\Entity\Langue $idLangue
     * @return Article
     */
    public function setIdLangue(\AppBundle\Entity\Langue $idLangue = null)
    {
        $this->idLangue = $idLangue;

        return $this;
    }

    /**
     * Get idLangue
     *
     * @return \AppBundle\Entity\Langue 
     */
    public function getIdLangue()
    {
        return $this->idLangue;
    }

    /**
     * Set idPublication
     *
     * @param \AppBundle\Entity\Publication $idPublication
     * @return Article
     */
    public function setIdPublication(\AppBundle\Entity\Publication $idPublication = null)
    {
        $this->idPublication = $idPublication;

        return $this;
    }

    /**
     * Get idPublication
     *
     * @return \AppBundle\Entity\Publication 
     */
    public function getIdPublication()
    {
        return $this->idPublication;
    }

    /**
     * Set idRedacteur
     *
     * @param \AppBundle\Entity\Redacteur $idRedacteur
     * @return Article
     */
    public function setIdRedacteur(\AppBundle\Entity\Redacteur $idRedacteur = null)
    {
        $this->idRedacteur = $idRedacteur;

        return $this;
    }

    /**
     * Get idRedacteur
     *
     * @return \AppBundle\Entity\Redacteur 
     */
    public function getIdRedacteur()
    {
        return $this->idRedacteur;
    }
}
