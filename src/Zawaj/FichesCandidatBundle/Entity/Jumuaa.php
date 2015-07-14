<?php

namespace Zawaj\FichesCandidatBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Jumuaa
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Zawaj\FichesCandidatBundle\Entity\JumuaaRepository")
 */
class Jumuaa
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
     * @ORM\Column(name="libelleJumuaa", type="string", length=255)
     */
    private $libelleJumuaa;


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
     * Set libelleJumuaa
     *
     * @param string $libelleJumuaa
     * @return Jumuaa
     */
    public function setLibelleJumuaa($libelleJumuaa)
    {
        $this->libelleJumuaa = $libelleJumuaa;

        return $this;
    }

    /**
     * Get libelleJumuaa
     *
     * @return string 
     */
    public function getLibelleJumuaa()
    {
        return $this->libelleJumuaa;
    }
}
