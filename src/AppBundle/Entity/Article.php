<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Article
 *
 * @ORM\Table(name="article")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ArticleRepository")
 */
class Article
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
     * @ORM\Column(name="titre_article", type="string", length=100)
     * @Assert\NotBlank(message="Titre non spécifié")
     */
    private $titreArticle;

    /**
     * @var string
     *
     * @ORM\Column(name="slug_article", type="string", length=100)
     * @Assert\NotBlank(message="Slug non spécifié")
     */
    private $slugArticle;

    /**
     * @var string
     *
     * @ORM\Column(name="categorie_article", type="string", length=25)
     * @Assert\NotBlank(message="Catégorie non spécifié")
     */
    private $categorieArticle;

    /**
     * @var string
     *
     * @ORM\Column(name="resume_article", type="text")
     * @Assert\NotBlank(message="Résumé non spécifié")
     */
    private $resumeArticle;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_article", type="datetime")
     * @Assert\NotBlank(message="Date non spécifié")
     *
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
     * @ORM\Column(name="paragraphe_article", type="text")
     * @Assert\NotBlank(message="Contenu de l'article non spécifié")
     */
    private $paragrapheArticle;

    /**
     * @var int
     *
     * @ORM\Column(name="id_langue", type="integer")
     * @Assert\NotBlank(message="Language non spécifié")
     */
    private $idLangue;


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
     * Set categorieArticle
     *
     * @param string $categorieArticle
     * @return Article
     */
    public function setCategorieArticle($categorieArticle)
    {
        $this->categorieArticle = $categorieArticle;

        return $this;
    }

    /**
     * Get categorieArticle
     *
     * @return string 
     */
    public function getCategorieArticle()
    {
        return $this->categorieArticle;
    }

    /**
     * Set resumeArticle
     *
     * @param string $resumeArticle
     * @return Article
     */
    public function setResumeArticle($resumeArticle)
    {
        $this->resumeArticle = $resumeArticle;

        return $this;
    }

    /**
     * Get resumeArticle
     *
     * @return string 
     */
    public function getResumeArticle()
    {
        return $this->resumeArticle;
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
     * Set idLangue
     *
     * @param integer $idLangue
     * @return Article
     */
    public function setIdLangue($idLangue)
    {
        $this->idLangue = $idLangue;

        return $this;
    }

    /**
     * Get idLangue
     *
     * @return integer 
     */
    public function getIdLangue()
    {
        return $this->idLangue;
    }
}
