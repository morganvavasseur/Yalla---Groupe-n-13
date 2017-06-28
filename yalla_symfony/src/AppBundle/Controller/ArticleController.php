<?php

namespace AppBundle\Controller;

use AppBundle\Form\ArticleType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use AppBundle\Entity\Article;


class ArticleController extends Controller
{
    /**
     * @Route("/article/{slug}", name="article")
     */
    public function articleAction($slug)
    {
        $article = $this->getDoctrine()
            ->getRepository('AppBundle:Article')
            ->findBy(array('slugArticle' => $slug));

        return $this->render('article.html.twig', array(
            'article' => $article
        ));
    }
}


