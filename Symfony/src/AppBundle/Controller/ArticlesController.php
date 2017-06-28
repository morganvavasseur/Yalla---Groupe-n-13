<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


$slug = null;

class ArticlesController extends Controller
{
    /**
     * @Route("/article", name="articles")
     */
    public function articlesAction()
    {
        $article = $this->getDoctrine()
            ->getRepository('AppBundle:Article')
            ->findBy(array(), array("dateArticle" => "desc"));

        return $this->render('articles.html.twig', array(
            'articles' => $article
        ));
    }
}
