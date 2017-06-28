<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use AppBundle\Entity\Fonction;

class FonctionsRedacteursAjoutController extends Controller
{

    /**
     * @Route("/fonction/ajouter", name="ajout fonction")
     */

    public function articleAjoutAction(Request $request)
    {
        $fonction = new Fonction();

        $form = $this->createFormBuilder($fonction)
            ->add("nomFonction")
            ->getForm();

        $form->handleRequest($request);
        $formview = $form->createView();


        if($form->isSubmitted() && $form->isValid())
        {
            $em = $this -> getDoctrine()->getManager();
            $em -> persist($fonction);
            $em -> flush();

            return $this->redirectToRoute('fonctions redacteurs');
        }

        return $this -> render("fonctions_redacteurs_ajout.html.twig", array(
            'form' => $formview
        ));
    }
}