<?php

namespace Zawaj\FichesCandidatBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EnfantCandidat
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Zawaj\FichesCandidatBundle\Entity\EnfantCandidatRepository")
 */
class EnfantCandidat
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
     * @ORM\Column(name="typeGarde", type="string", length=255)
     */
    private $typeGarde;


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
     * Set typeGarde
     *
     * @param string $typeGarde
     * @return EnfantCandidat
     */
    public function setTypeGarde($typeGarde)
    {
        $this->typeGarde = $typeGarde;

        return $this;
    }

    /**
     * Get typeGarde
     *
     * @return string 
     */
    public function getTypeGarde()
    {
        return $this->typeGarde;
    }
}
