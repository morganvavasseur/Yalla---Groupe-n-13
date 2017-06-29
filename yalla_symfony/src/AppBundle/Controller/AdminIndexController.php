<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class AdminIndexController extends Controller
{
    /**
     * @Route("/admin", name="admin home")
     */
    public function indexAction()
    {

        return $this->render('admin/index.html.twig');


    }
}
