<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class RedacteursController extends Controller
{
    /**
     * @Route("/redacteur", name="redacteurs")
     */
    public function redacteursAction()
    {
        $redacteur = $this->getDoctrine()
            ->getRepository('AppBundle:Redacteur')
            ->findall();

        return $this->render('redacteurs.html.twig', array(
            'Redacteur' => $redacteur
        ));
    }
}