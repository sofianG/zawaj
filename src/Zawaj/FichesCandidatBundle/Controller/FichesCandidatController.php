<?php

namespace Zawaj\FichesCandidatBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class FichesCandidatController extends Controller
{
    public function indexAction()
    {
        return $this->render('ZawajFichesCandidatBundle::index.html.twig');
    }
}
