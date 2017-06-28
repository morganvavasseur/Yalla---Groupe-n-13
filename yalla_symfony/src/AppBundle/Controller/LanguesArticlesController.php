<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class LanguesArticlesController extends Controller
{
    /**
     * @Route("/langue", name="langues articles")
     */
    public function languesArticlesAction()
    {
        $langue = $this->getDoctrine()
            ->getRepository('AppBundle:Langue')
            ->findBy(array());

        return $this->render('langues_articles.html.twig', array(
            'langues' => $langue
        ));
    }
}