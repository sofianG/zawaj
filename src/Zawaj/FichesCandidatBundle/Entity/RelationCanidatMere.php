<?php

namespace Zawaj\FichesCandidatBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RelationCanidatMere
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Zawaj\FichesCandidatBundle\Entity\RelationCanidatMereRepository")
 */
class RelationCanidatMere
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
     * @ORM\Column(name="typeRelationMere", type="string", length=255)
     */
    private $typeRelationMere;

    /**
     * @ORM\ManyToOne(targetEntity="Zawaj\FichesCandidatBundle\Entity\Candidat")
     * @ORM\JoinColumn(nullable=false)
     */
    private $candidat;

    /**
     * @ORM\ManyToOne(targetEntity="Zawaj\FichesCandidatBundle\Entity\Mere")
     * @ORM\JoinColumn(nullable=false)
     */
    private $mere;

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
     * Set typeRelationMere
     *
     * @param string $typeRelationMere
     * @return RelationCanidatMere
     */
    public function setTypeRelationMere($typeRelationMere)
    {
        $this->typeRelationMere = $typeRelationMere;

        return $this;
    }

    /**
     * Get typeRelationMere
     *
     * @return string 
     */
    public function getTypeRelationMere()
    {
        return $this->typeRelationMere;
    }

    /**
     * Set candidat
     *
     * @param \Zawaj\FichesCandidatBundle\Entity\Candidat $candidat
     * @return RelationCanidatMere
     */
    public function setCandidat(\Zawaj\FichesCandidatBundle\Entity\Candidat $candidat)
    {
        $this->candidat = $candidat;

        return $this;
    }

    /**
     * Get candidat
     *
     * @return \Zawaj\FichesCandidatBundle\Entity\Candidat 
     */
    public function getCandidat()
    {
        return $this->candidat;
    }

    /**
     * Set mere
     *
     * @param \Zawaj\FichesCandidatBundle\Entity\Mere $mere
     * @return RelationCanidatMere
     */
    public function setMere(\Zawaj\FichesCandidatBundle\Entity\Mere $mere)
    {
        $this->mere = $mere;

        return $this;
    }

    /**
     * Get mere
     *
     * @return \Zawaj\FichesCandidatBundle\Entity\Mere 
     */
    public function getMere()
    {
        return $this->mere;
    }
}
