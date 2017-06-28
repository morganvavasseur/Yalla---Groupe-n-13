<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use AppBundle\Form\ArticleType;
use AppBundle\Entity\Article;

class ArticleSupprimerController extends Controller
{

    /**
     * @Route("/article/supprimer/{slug}", name="supprimer article")
     */

    public function supprimerAction($slug)
    {
        $em = $this->getDoctrine()->getManager();
        $article = $em->getRepository('AppBundle:Article')->findOneBy(array('slugArticle' => $slug));

        if($article !== null)
        {
            $em->remove($article);
            $em->flush();
        }

        return $this->redirectToRoute('articles');

    }
}