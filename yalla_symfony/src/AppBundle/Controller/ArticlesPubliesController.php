<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ArticlesPubliesController extends Controller
{
    /**
     * @Route("/article_publies", name="articles publies")
     */
    public function articlespubliesAction()
    {
        $article = $this->getDoctrine()
            ->getRepository('AppBundle:Article')
            ->findBy(array('idPublication' => '1'), array('dateArticle' => 'desc'));

        return $this->render('articles_publies.html.twig', array(
            'articles' => $article
        ));
    }
}