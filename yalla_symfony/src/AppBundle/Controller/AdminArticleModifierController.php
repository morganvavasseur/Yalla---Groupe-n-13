<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use AppBundle\Form\ArticleType;
use AppBundle\Entity\Article;

class AdminArticleModifierController extends Controller
{

    /**
     * @Route("/admin/article/modifier/{slug}", name="admin modifier article")
     */

    public function articleModifierAction(Request $request, $slug)
    {
        $em = $this->getDoctrine()->getManager();
        $article = $em->getRepository('AppBundle:Article')->findOneBy(array('slugArticle' => $slug));


        $form = $this->createForm(ArticleType::class, $article);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $em->flush();

            return $this->redirectToRoute('admin articles');
        }


        return $this->render('admin/article_modifier.html.twig', [
            'form' => $form->createView()
        ]);
    }
}