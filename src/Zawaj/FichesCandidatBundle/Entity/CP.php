<?php

namespace Zawaj\FichesCandidatBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CP
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Zawaj\FichesCandidatBundle\Entity\CPRepository")
 */
class CP
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
     * @ORM\Column(name="libelleCP", type="string", length=5)
     */
    private $libelleCP;


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
     * Set libelleCP
     *
     * @param string $libelleCP
     * @return CP
     */
    public function setLibelleCP($libelleCP)
    {
        $this->libelleCP = $libelleCP;

        return $this;
    }

    /**
     * Get libelleCP
     *
     * @return string 
     */
    public function getLibelleCP()
    {
        return $this->libelleCP;
    }
}
