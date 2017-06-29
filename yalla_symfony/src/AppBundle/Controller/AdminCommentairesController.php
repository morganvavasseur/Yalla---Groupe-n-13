<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class AdminCommentairesController extends Controller
{
    /**
     * @Route("/admin/commentaire", name="admin commentaires")
     */
    public function commentairesAction()
    {
        // replace this example code with whatever you need
        return $this->render('admin/commentaires.html.twig');
    }
}