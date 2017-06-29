<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


$slug = null;

class AdminArticlesController extends Controller
{
    /**
     * @Route("/admin/article", name="admin articles")
     */
    public function articlesAction()
    {
        $article = $this->getDoctrine()
            ->getRepository('AppBundle:Article')
            ->findBy(array(), array("dateArticle" => "desc"));

        return $this->render('admin/articles.html.twig', array(
            'articles' => $article
        ));
    }
}
