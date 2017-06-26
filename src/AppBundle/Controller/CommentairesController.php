<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class CommentairesController extends Controller
{
    /**
     * @Route("/commentaire", name="commentaires")
     */
    public function commentairesAction()
    {
        // replace this example code with whatever you need
        return $this->render('commentaires.html.twig');
    }
}