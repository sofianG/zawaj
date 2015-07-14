<?php

namespace Zawaj\FichesCandidatBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProfilRechercheHomme
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Zawaj\FichesCandidatBundle\Entity\ProfilRechercheHommeRepository")
 */
class ProfilRechercheHomme
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var boolean
     *
     * @ORM\Column(name="situationPro", type="boolean")
     */
    private $situationPro;

    /**
     * @var boolean
     *
     * @ORM\Column(name="carte", type="boolean")
     */
    private $carte;

    /**
     * @var boolean
     *
     * @ORM\Column(name="titreUnAn", type="boolean")
     */
    private $titreUnAn;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set situationPro
     *
     * @param boolean $situationPro
     * @return ProfilRechercheHomme
     */
    public function setSituationPro($situationPro)
    {
        $this->situationPro = $situationPro;

        return $this;
    }

    /**
     * Get situationPro
     *
     * @return boolean 
     */
    public function getSituationPro()
    {
        return $this->situationPro;
    }

    /**
     * Set carte
     *
     * @param boolean $carte
     * @return ProfilRechercheHomme
     */
    public function setCarte($carte)
    {
        $this->carte = $carte;

        return $this;
    }

    /**
     * Get carte
     *
     * @return boolean 
     */
    public function getCarte()
    {
        return $this->carte;
    }

    /**
     * Set titreUnAn
     *
     * @param boolean $titreUnAn
     * @return ProfilRechercheHomme
     */
    public function setTitreUnAn($titreUnAn)
    {
        $this->titreUnAn = $titreUnAn;

        return $this;
    }

    /**
     * Get titreUnAn
     *
     * @return boolean 
     */
    public function getTitreUnAn()
    {
        return $this->titreUnAn;
    }
}
