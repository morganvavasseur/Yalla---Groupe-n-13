<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use AppBundle\Form\ArticleType;
use AppBundle\Entity\Article;

class ArticleAjoutController extends Controller
{

    /**
     * @Route("/article/ajouter", name="ajout article")
     */

    public function articleAjoutAction(Request $request)
    {
        $article = new Article();

        $form = $this->createForm(ArticleType::class, $article);
        $form->handleRequest($request);
        $formview = $form->createView();

        if($form->isSubmitted() && $form->isValid())
        {
            $em = $this -> getDoctrine()->getManager();
            $em -> persist($article);
            $em -> flush();

            return $this->redirectToRoute('articles');
        }

        return $this -> render("article_ajout.html.twig", array(
            'form' => $formview
        ));
    }
}