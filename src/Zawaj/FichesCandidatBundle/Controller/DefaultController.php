<?php

namespace Zawaj\FichesCandidatBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('ZawajFichesCandidatBundle:Default:index.html.twig', array('name' => $name));
    }
}
