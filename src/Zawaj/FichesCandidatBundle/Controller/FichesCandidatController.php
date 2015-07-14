<?php

namespace Zawaj\FichesCandidatBundle\Controller;

use Zawaj\FichesCandidatBundle\Entity\Ville;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class FichesCandidatController extends Controller
{
    public function indexAction()
    {
        return $this->render('ZawajFichesCandidatBundle::index.html.twig', array(
        ));
    }


    public function fichesRecusAction($typeSexe, $id)
    {
        if ($typeSexe == 'Homme'){
        return $this->render('ZawajFichesCandidatBundle::fichesRecus.html.twig', array(
            'typeSexe' => $typeSexe
            ));
        }
        else {
            return $this->render('ZawajFichesCandidatBundle::fichesRecus.html.twig', array(
                'typeSexe' => $typeSexe
            ));
        }
    }


    public function fichesInscritsAction($typeSexe, $id)
    {
        if ($typeSexe == 'Homme'){
            return $this->render('ZawajFichesCandidatBundle::fichesInscrits.html.twig', array(
                'typeSexe' => $typeSexe
            ));
        }
        else {
            return $this->render('ZawajFichesCandidatBundle::fichesInscrits.html.twig', array(
                'typeSexe' => $typeSexe
            ));
        }
    }


    public function fichesArchivesAction($typeSexe, $id)
    {
        if ($typeSexe == 'Homme'){
            return $this->render('ZawajFichesCandidatBundle::fichesArchives.html.twig', array(
                'typeSexe' => $typeSexe
            ));
        }
        else {
            return $this->render('ZawajFichesCandidatBundle::fichesArchives.html.twig', array(
                'typeSexe' => $typeSexe
            ));
        }
    }
}
