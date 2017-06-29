<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class MissionsController extends Controller
{
    /**
     * @Route("/mission", name="missions")
     */
    public function indexAction()
    {

        return $this->render('missions.html.twig');


    }
}
