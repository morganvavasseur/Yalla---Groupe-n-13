<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class AdminInscriptionController extends Controller
{
    /**
     * @Route("/admin/inscription", name="admin inscription")
     */
    public function inscriptionAction()
    {

        return $this->render('admin/inscription.html.twig');


    }
}
