<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class AdminRedacteursController extends Controller
{
    /**
     * @Route("/admin/redacteur", name="admin redacteurs")
     */
    public function redacteursAction()
    {
        $redacteur = $this->getDoctrine()
            ->getRepository('AppBundle:Redacteur')
            ->findall();

        return $this->render('admin/redacteurs.html.twig', array(
            'Redacteur' => $redacteur
        ));
    }
}