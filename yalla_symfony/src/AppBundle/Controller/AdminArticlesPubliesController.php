<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class AdminArticlesPubliesController extends Controller
{
    /**
     * @Route("/admin/article_publies", name="admin articles publies")
     */
    public function articlespubliesAction()
    {
        $article = $this->getDoctrine()
            ->getRepository('AppBundle:Article')
            ->findBy(array('idPublication' => '1'), array('dateArticle' => 'desc'));

        return $this->render('admin/articles_publies.html.twig', array(
            'articles' => $article
        ));
    }
}