<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use AppBundle\Form\ArticleType;
use AppBundle\Entity\Article;

class AdminController extends Controller
{

    /**
     * @Route("/admin", name="ajout article")
     */

    public function adminAction()
    {
        return $this -> render("admin_index.html.twig");
    }
}