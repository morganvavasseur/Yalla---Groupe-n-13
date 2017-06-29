<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use AppBundle\Entity\Categorie;

class AdminCategoriesArticlesAjoutController extends Controller
{

    /**
     * @Route("/admin/categorie/ajouter", name="admin ajout categorie")
     */

    public function articleAjoutAction(Request $request)
    {
        $categorie = new Categorie();

        //$form = $this->createForm(ArticleType::class, $article);
        //$form =$this->createForm(ArticleType::class, $article);

        /*
        $form = $this->createFormBuilder($categorie)
            ->add('idCategorie', 'entity', array(
                'class' => 'AppBundle:Categorie',
                'property' => 'nomCategorie',

            ))
            ->getForm();
        */

        $form = $this->createFormBuilder($categorie)
            ->add("nomCategorie")
            ->getForm();

        $form->handleRequest($request);
        $formview = $form->createView();


        if($form->isSubmitted() && $form->isValid())
        {
            $em = $this -> getDoctrine()->getManager();
            $em -> persist($categorie);
            $em -> flush();

            return $this->redirectToRoute('categories articles');
        }

        return $this -> render("admin/categorie_articles_ajout.html.twig", array(
            'form' => $formview
        ));
    }
}