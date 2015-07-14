<?php

namespace Zawaj\FichesCandidatBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mere
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Zawaj\FichesCandidatBundle\Entity\MereRepository")
 */
class Mere
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
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=255)
     */
    private $prenom;

    /**
     * @var boolean
     *
     * @ORM\Column(name="pratiquante", type="boolean")
     */
    private $pratiquante;

    /**
     * @ORM\ManyToOne(targetEntity="Zawaj\FichesCandidatBundle\Entity\Pays")
     * @ORM\JoinColumn(nullable=false)
     */
    private $paysOrigineMere;

    /**
     * @ORM\ManyToOne(targetEntity="Zawaj\FichesCandidatBundle\Entity\Pays")
     * @ORM\JoinColumn(nullable=false)
     */
    private $villeHabitationMere;

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
     * Set nom
     *
     * @param string $nom
     * @return Mere
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     * @return Mere
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string 
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set pratiquante
     *
     * @param boolean $pratiquante
     * @return Mere
     */
    public function setPratiquante($pratiquante)
    {
        $this->pratiquante = $pratiquante;

        return $this;
    }

    /**
     * Get pratiquante
     *
     * @return boolean 
     */
    public function getPratiquante()
    {
        return $this->pratiquante;
    }

    /**
     * Set paysOrigineMere
     *
     * @param \Zawaj\FichesCandidatBundle\Entity\Pays $paysOrigineMere
     * @return Mere
     */
    public function setPaysOrigineMere(\Zawaj\FichesCandidatBundle\Entity\Pays $paysOrigineMere)
    {
        $this->paysOrigineMere = $paysOrigineMere;

        return $this;
    }

    /**
     * Get paysOrigineMere
     *
     * @return \Zawaj\FichesCandidatBundle\Entity\Pays 
     */
    public function getPaysOrigineMere()
    {
        return $this->paysOrigineMere;
    }

    /**
     * Set villeHabitationMere
     *
     * @param \Zawaj\FichesCandidatBundle\Entity\Pays $villeHabitationMere
     * @return Mere
     */
    public function setVilleHabitationMere(\Zawaj\FichesCandidatBundle\Entity\Pays $villeHabitationMere)
    {
        $this->villeHabitationMere = $villeHabitationMere;

        return $this;
    }

    /**
     * Get villeHabitationMere
     *
     * @return \Zawaj\FichesCandidatBundle\Entity\Pays 
     */
    public function getVilleHabitationMere()
    {
        return $this->villeHabitationMere;
    }
}
