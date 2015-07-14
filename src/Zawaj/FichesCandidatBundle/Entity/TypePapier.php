<?php

namespace Zawaj\FichesCandidatBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TypePapier
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Zawaj\FichesCandidatBundle\Entity\TypePapierRepository")
 */
class TypePapier
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
     * @ORM\Column(name="libelleTypePapier", type="string", length=255)
     */
    private $libelleTypePapier;


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
     * Set libelleTypePapier
     *
     * @param string $libelleTypePapier
     * @return TypePapier
     */
    public function setLibelleTypePapier($libelleTypePapier)
    {
        $this->libelleTypePapier = $libelleTypePapier;

        return $this;
    }

    /**
     * Get libelleTypePapier
     *
     * @return string 
     */
    public function getLibelleTypePapier()
    {
        return $this->libelleTypePapier;
    }
}