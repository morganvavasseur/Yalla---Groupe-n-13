<?php

namespace AppBundle\Controller;

use AppBundle\Form\ArticleType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use AppBundle\Entity\Article;


class AdminArticleController extends Controller
{
    /**
     * @Route("/admin/article/{slug}", name="admin article")
     */
    public function articleAction($slug)
    {
        $article = $this->getDoctrine()
            ->getRepository('AppBundle:Article')
            ->findBy(array('slugArticle' => $slug));

        return $this->render('admin/article.html.twig', array(
            'article' => $article
        ));
    }
}


