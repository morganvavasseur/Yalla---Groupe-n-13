<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class LanguesArticlesController extends Controller
{
    /**
     * @Route("/langue_article", name="langues articles")
     */
    public function languesArticlesAction()
    {
        $langue = $this->getDoctrine()
            ->getRepository('AppBundle:Langue')
            ->findall();

        return $this->render('langues_articles.html.twig', array(
            'Langue' => $langue
        ));
    }
}