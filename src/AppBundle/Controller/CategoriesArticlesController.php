<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class CategoriesArticlesController extends Controller
{
    /**
     * @Route("/categorie_article", name="categories articles")
     */
    public function categoriesArticlesAction()
    {
        // replace this example code with whatever you need
        return $this->render('categories_articles.html.twig');
    }
}