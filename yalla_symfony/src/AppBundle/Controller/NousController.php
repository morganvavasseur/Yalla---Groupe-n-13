<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class NousController extends Controller
{
    /**
     * @Route("/qui_sommes_nous", name="nous")
     */
    public function indexAction()
    {

        return $this->render('nous.html.twig');


    }
}
