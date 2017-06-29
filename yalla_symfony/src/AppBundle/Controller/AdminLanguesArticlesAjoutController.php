<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use AppBundle\Entity\Langue;

class AdminLanguesArticlesAjoutController extends Controller
{

    /**
     * @Route("/admin/langue/ajouter", name="admin ajout langue")
     */

    public function articleAjoutAction(Request $request)
    {
        $langue = new Langue();

        $form = $this->createFormBuilder($langue)
            ->add("nomLangue")
            ->getForm();

        $form->handleRequest($request);
        $formview = $form->createView();


        if($form->isSubmitted() && $form->isValid())
        {
            $em = $this -> getDoctrine()->getManager();
            $em -> persist($langue);
            $em -> flush();

            return $this->redirectToRoute('langues articles');
        }

        return $this -> render("admin/langues_articles_ajout.html.twig", array(
            'form' => $formview
        ));
    }
}