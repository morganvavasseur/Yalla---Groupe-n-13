<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use AppBundle\Entity\Article;


use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

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
            ->add('titreArticle', TextType::class)
            ->add('idCategorie', EntityType::class, array(
                'class' => 'AppBundle:Categorie',
                'choice_label' => 'nomCategorie'
            ))
            ->add('fichierArticle', TextType::class)
            ->add('paragrapheArticle', TextareaType::class)
            ->add('idLangue', EntityType::class, array(
                'class' => 'AppBundle:Langue',
                'choice_label' => 'nomLangue'
            ))
            ->add('idPublication', EntityType::class, array(
                'class' => 'AppBundle:Publication',
                'choice_label' => 'nomPublication'
            ))
            ->add('idRedacteur', EntityType::class, array(
                'class' => 'AppBundle:Redacteur',
                'choice_label' => 'nomRedacteur'
            ))
            ->add('imageArticle', TextType::class)
            ->getForm();

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