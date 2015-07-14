<?php

namespace Zawaj\FichesCandidatBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RelationCandidatPere
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Zawaj\FichesCandidatBundle\Entity\RelationCandidatPereRepository")
 */
class RelationCandidatPere
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
     * @ORM\Column(name="typeRelationPere", type="string", length=255)
     */
    private $typeRelationPere;


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
     * Set typeRelationPere
     *
     * @param string $typeRelationPere
     * @return RelationCandidatPere
     */
    public function setTypeRelationPere($typeRelationPere)
    {
        $this->typeRelationPere = $typeRelationPere;

        return $this;
    }

    /**
     * Get typeRelationPere
     *
     * @return string 
     */
    public function getTypeRelationPere()
    {
        return $this->typeRelationPere;
    }
}
