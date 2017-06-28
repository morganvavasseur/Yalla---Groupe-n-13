<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class InscriptionController extends Controller
{
    /**
     * @Route("/inscription", name="inscription")
     */
    public function inscriptionAction()
    {

        return $this->render('inscription.html.twig');


    }
}
