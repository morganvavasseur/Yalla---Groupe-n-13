<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class FonctionsRedacteursController extends Controller
{
    /**
     * @Route("/fonction_redacteur", name="fonctions redacteurs")
     */
    public function fonctionsRedacteursAction()
    {
        $fonction = $this->getDoctrine()
            ->getRepository('AppBundle:Fonction')
            ->findall();

        return $this->render('fonctions_redacteurs.html.twig', array(
            'Fonction' => $fonction
        ));
    }
}