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

        //$form = $this->createForm(ArticleType::class, $article);
        //$form =$this->createForm(ArticleType::class, $article);

        $form = $this->createFormBuilder($article)
            ->add('titreArticle', 'text')
            ->add('idCategorie', 'integer')
            ->add('fichierArticle', 'text')
            ->add('paragrapheArticle', 'textarea')
            ->add('version_article', 'integer')
            ->add('idLangue', 'integer')
            ->add('idPublication', 'integer')
            ->add('idRedacteur', 'integer')
            ->getForm();
            /*
            ->add('idLangue', ChoiceType::class, array(
                    'choices'   => array(
                    'Français'  => "1",
                    'Anglais'   => "2",
                    'Arabe'     => "3")))
            */



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
/*
        $article = new Article();
        $form = $this->createForm(new ArticleType(), $article);

        $request = $this->getRequest();
        if ($request->getMethod() == 'POST') {
            $form->bind($request);

            if ($form->isValid()) {
                // Perform some action, such as sending an email

                // Redirect - This is important to prevent users re-posting
                // the form if they refresh the page
                return $this->redirect($this->generateUrl('articles'));
            }
        }

        return $this->render('article_ajout.html.twig', array(
            'form' => $form->createView()
        ));
*/

    }
}