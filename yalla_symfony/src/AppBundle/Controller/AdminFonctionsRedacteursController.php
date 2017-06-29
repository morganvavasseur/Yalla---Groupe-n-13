<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class AdminFonctionsRedacteursController extends Controller
{
    /**
     * @Route("/admin/fonction", name="admin fonctions redacteurs")
     */
    public function fonctionsRedacteursAction()
    {
        $fonction = $this->getDoctrine()
            ->getRepository('AppBundle:Fonction')
            ->findall();

        return $this->render('admin/fonctions_redacteurs.html.twig', array(
            'fonctions' => $fonction
        ));
    }
}