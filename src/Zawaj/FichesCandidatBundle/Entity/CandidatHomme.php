<?php

namespace Zawaj\FichesCandidatBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CandidatHomme
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Zawaj\FichesCandidatBundle\Entity\CandidatHommeRepository")
 */
class CandidatHomme
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
     * @ORM\Column(name="barbe", type="boolean")
     */
    private $barbe;


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
     * Set barbe
     *
     * @param boolean $barbe
     * @return CandidatHomme
     */
    public function setBarbe($barbe)
    {
        $this->barbe = $barbe;

        return $this;
    }

    /**
     * Get barbe
     *
     * @return boolean 
     */
    public function getBarbe()
    {
        return $this->barbe;
    }
}
