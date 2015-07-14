<?php

namespace Zawaj\FichesCandidatBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DomaineEtude
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Zawaj\FichesCandidatBundle\Entity\DomaineEtudeRepository")
 */
class DomaineEtude
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
     * @ORM\Column(name="libelleDomaineEtude", type="string", length=255)
     */
    private $libelleDomaineEtude;


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
     * Set libelleDomaineEtude
     *
     * @param string $libelleDomaineEtude
     * @return DomaineEtude
     */
    public function setLibelleDomaineEtude($libelleDomaineEtude)
    {
        $this->libelleDomaineEtude = $libelleDomaineEtude;

        return $this;
    }

    /**
     * Get libelleDomaineEtude
     *
     * @return string 
     */
    public function getLibelleDomaineEtude()
    {
        return $this->libelleDomaineEtude;
    }
}
