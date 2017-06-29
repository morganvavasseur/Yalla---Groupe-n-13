<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class AdminCategoriesArticlesController extends Controller
{
    /**
     * @Route("/admin/categorie", name="admin categories articles")
     */
    public function categoriesArticlesAction()
    {
        $article = $this->getDoctrine()
            ->getRepository('AppBundle:Categorie')
            ->findBy(array());

        return $this->render('admin/categories_articles.html.twig', array(
            'categories' => $article
        ));
    }
}