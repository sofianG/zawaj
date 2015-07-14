<?php

namespace Zawaj\FichesCandidatBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProfilRecherche
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Zawaj\FichesCandidatBundle\Entity\ProfilRechercheRepository")
 */
class ProfilRecherche
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
     * @var integer
     *
     * @ORM\Column(name="ageMin", type="smallint")
     */
    private $ageMin;

    /**
     * @var integer
     *
     * @ORM\Column(name="ageMax", type="smallint")
     */
    private $ageMax;

    /**
     * @var boolean
     *
     * @ORM\Column(name="origine", type="boolean")
     */
    private $origine;

    /**
     * @var boolean
     *
     * @ORM\Column(name="estDivorce", type="boolean")
     */
    private $estDivorce;

    /**
     * @var boolean
     *
     * @ORM\Column(name="possedeEnfant", type="boolean")
     */
    private $possedeEnfant;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbEnfantMax", type="smallint")
     */
    private $nbEnfantMax;

    /**
     * @var integer
     *
     * @ORM\Column(name="ageEnfantMax", type="smallint")
     */
    private $ageEnfantMax;

    /**
     * @var boolean
     *
     * @ORM\Column(name="fumeur", type="boolean")
     */
    private $fumeur;

    /**
     * @var integer
     *
     * @ORM\Column(name="tailleMin", type="smallint")
     */
    private $tailleMin;

    /**
     * @var integer
     *
     * @ORM\Column(name="tailleMax", type="smallint")
     */
    private $tailleMax;


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
     * Set ageMin
     *
     * @param integer $ageMin
     * @return ProfilRecherche
     */
    public function setAgeMin($ageMin)
    {
        $this->ageMin = $ageMin;

        return $this;
    }

    /**
     * Get ageMin
     *
     * @return integer 
     */
    public function getAgeMin()
    {
        return $this->ageMin;
    }

    /**
     * Set ageMax
     *
     * @param integer $ageMax
     * @return ProfilRecherche
     */
    public function setAgeMax($ageMax)
    {
        $this->ageMax = $ageMax;

        return $this;
    }

    /**
     * Get ageMax
     *
     * @return integer 
     */
    public function getAgeMax()
    {
        return $this->ageMax;
    }

    /**
     * Set origine
     *
     * @param boolean $origine
     * @return ProfilRecherche
     */
    public function setOrigine($origine)
    {
        $this->origine = $origine;

        return $this;
    }

    /**
     * Get origine
     *
     * @return boolean 
     */
    public function getOrigine()
    {
        return $this->origine;
    }

    /**
     * Set estDivorce
     *
     * @param boolean $estDivorce
     * @return ProfilRecherche
     */
    public function setEstDivorce($estDivorce)
    {
        $this->estDivorce = $estDivorce;

        return $this;
    }

    /**
     * Get estDivorce
     *
     * @return boolean 
     */
    public function getEstDivorce()
    {
        return $this->estDivorce;
    }

    /**
     * Set possedeEnfant
     *
     * @param boolean $possedeEnfant
     * @return ProfilRecherche
     */
    public function setPossedeEnfant($possedeEnfant)
    {
        $this->possedeEnfant = $possedeEnfant;

        return $this;
    }

    /**
     * Get possedeEnfant
     *
     * @return boolean 
     */
    public function getPossedeEnfant()
    {
        return $this->possedeEnfant;
    }

    /**
     * Set nbEnfantMax
     *
     * @param integer $nbEnfantMax
     * @return ProfilRecherche
     */
    public function setNbEnfantMax($nbEnfantMax)
    {
        $this->nbEnfantMax = $nbEnfantMax;

        return $this;
    }

    /**
     * Get nbEnfantMax
     *
     * @return integer 
     */
    public function getNbEnfantMax()
    {
        return $this->nbEnfantMax;
    }

    /**
     * Set ageEnfantMax
     *
     * @param integer $ageEnfantMax
     * @return ProfilRecherche
     */
    public function setAgeEnfantMax($ageEnfantMax)
    {
        $this->ageEnfantMax = $ageEnfantMax;

        return $this;
    }

    /**
     * Get ageEnfantMax
     *
     * @return integer 
     */
    public function getAgeEnfantMax()
    {
        return $this->ageEnfantMax;
    }

    /**
     * Set fumeur
     *
     * @param boolean $fumeur
     * @return ProfilRecherche
     */
    public function setFumeur($fumeur)
    {
        $this->fumeur = $fumeur;

        return $this;
    }

    /**
     * Get fumeur
     *
     * @return boolean 
     */
    public function getFumeur()
    {
        return $this->fumeur;
    }

    /**
     * Set tailleMin
     *
     * @param integer $tailleMin
     * @return ProfilRecherche
     */
    public function setTailleMin($tailleMin)
    {
        $this->tailleMin = $tailleMin;

        return $this;
    }

    /**
     * Get tailleMin
     *
     * @return integer 
     */
    public function getTailleMin()
    {
        return $this->tailleMin;
    }

    /**
     * Set tailleMax
     *
     * @param integer $tailleMax
     * @return ProfilRecherche
     */
    public function setTailleMax($tailleMax)
    {
        $this->tailleMax = $tailleMax;

        return $this;
    }

    /**
     * Get tailleMax
     *
     * @return integer 
     */
    public function getTailleMax()
    {
        return $this->tailleMax;
    }
}
