<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class AdminLanguesArticlesController extends Controller
{
    /**
     * @Route("admin/langue", name="admin langues articles")
     */
    public function languesArticlesAction()
    {
        $langue = $this->getDoctrine()
            ->getRepository('AppBundle:Langue')
            ->findBy(array());

        return $this->render('admin/langues_articles.html.twig', array(
            'langues' => $langue
        ));
    }
}