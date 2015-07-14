<?php

namespace Zawaj\FichesCandidatBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Candidat
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Zawaj\FichesCandidatBundle\Entity\CandidatRepository")
 */
class Candidat
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
     * @var \DateTime
     *
     * @ORM\Column(name="dateNaissance", type="date")
     */
    private $dateNaissance;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="text")
     */
    private $adresse;

    /**
     * @var string
     *
     * @ORM\Column(name="telephone", type="string", length=255)
     */
    private $telephone;

    /**
     * @var boolean
     *
     * @ORM\Column(name="situtationPro", type="boolean")
     */
    private $situtationPro;

    /**
     * @var boolean
     *
     * @ORM\Column(name="estEtudiant", type="boolean")
     */
    private $estEtudiant;

    /**
     * @var boolean
     *
     * @ORM\Column(name="estNeeEnFrance", type="boolean")
     */
    private $estNeeEnFrance;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateArriveeFrance", type="date")
     */
    private $dateArriveeFrance;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateArriveeToulouse", type="date")
     */
    private $dateArriveeToulouse;

    /**
     * @var boolean
     *
     * @ORM\Column(name="estCelibataire", type="boolean")
     */
    private $estCelibataire;

    /**
     * @var boolean
     *
     * @ORM\Column(name="dejaMarie", type="boolean")
     */
    private $dejaMarie;

    /**
     * @var boolean
     *
     * @ORM\Column(name="dejaMarieCivilement", type="boolean")
     */
    private $dejaMarieCivilement;

    /**
     * @var boolean
     *
     * @ORM\Column(name="divorce", type="boolean")
     */
    private $divorce;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateDivorce", type="date")
     */
    private $dateDivorce;

    /**
     * @var integer
     *
     * @ORM\Column(name="taille", type="integer")
     */
    private $taille;

    /**
     * @var integer
     *
     * @ORM\Column(name="poids", type="integer")
     */
    private $poids;

    /**
     * @var boolean
     *
     * @ORM\Column(name="priereQuotidienne", type="boolean")
     */
    private $priereQuotidienne;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateDebutPriere", type="date")
     */
    private $dateDebutPriere;

    /**
     * @var boolean
     *
     * @ORM\Column(name="frequentationMosquee", type="boolean")
     */
    private $frequentationMosquee;

    /**
     * @var boolean
     *
     * @ORM\Column(name="estReconvertit", type="boolean")
     */
    private $estReconvertit;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateReconversion", type="date")
     */
    private $dateReconversion;

    /**
     * @var boolean
     *
     * @ORM\Column(name="hijra", type="boolean")
     */
    private $hijra;

    /**
     * @var boolean
     *
     * @ORM\Column(name="fumeur", type="boolean")
     */
    private $fumeur;

    /**
     * @var boolean
     *
     * @ORM\Column(name="arreterFumer", type="boolean")
     */
    private $arreterFumer;

    /**
     * @var boolean
     *
     * @ORM\Column(name="consoStup", type="boolean")
     */
    private $consoStup;

    /**
     * @var boolean
     *
     * @ORM\Column(name="consoAlcool", type="boolean")
     */
    private $consoAlcool;

    /**
     * @var boolean
     *
     * @ORM\Column(name="exigencesPhysique", type="boolean")
     */
    private $exigencesPhysique;

    /**
     * @var string
     *
     * @ORM\Column(name="tempsLibre", type="text")
     */
    private $tempsLibre;

    /**
     * @var string
     *
     * @ORM\Column(name="autreLangue", type="text")
     */
    private $autreLangue;

    /**
     * @var string
     *
     * @ORM\Column(name="attenteMariage", type="text")
     */
    private $attenteMariage;

    /**
     * @var string
     *
     * @ORM\Column(name="presentationPerso", type="text")
     */
    private $presentationPerso;

    /**
     * @var string
     *
     * @ORM\Column(name="remarque", type="text")
     */
    private $remarque;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateInscription", type="date")
     */
    private $dateInscription;

    /**
     * @var boolean
     *
     * @ORM\Column(name="rechercheEmploi", type="boolean")
     */
    private $rechercheEmploi;


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
     * @return Candidat
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
     * Set dateNaissance
     *
     * @param \DateTime $dateNaissance
     * @return Candidat
     */
    public function setDateNaissance($dateNaissance)
    {
        $this->dateNaissance = $dateNaissance;

        return $this;
    }

    /**
     * Get dateNaissance
     *
     * @return \DateTime 
     */
    public function getDateNaissance()
    {
        return $this->dateNaissance;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     * @return Candidat
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string 
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set telephone
     *
     * @param string $telephone
     * @return Candidat
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get telephone
     *
     * @return string 
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set situtationPro
     *
     * @param boolean $situtationPro
     * @return Candidat
     */
    public function setSitutationPro($situtationPro)
    {
        $this->situtationPro = $situtationPro;

        return $this;
    }

    /**
     * Get situtationPro
     *
     * @return boolean 
     */
    public function getSitutationPro()
    {
        return $this->situtationPro;
    }

    /**
     * Set estEtudiant
     *
     * @param boolean $estEtudiant
     * @return Candidat
     */
    public function setEstEtudiant($estEtudiant)
    {
        $this->estEtudiant = $estEtudiant;

        return $this;
    }

    /**
     * Get estEtudiant
     *
     * @return boolean 
     */
    public function getEstEtudiant()
    {
        return $this->estEtudiant;
    }

    /**
     * Set estNeeEnFrance
     *
     * @param boolean $estNeeEnFrance
     * @return Candidat
     */
    public function setEstNeeEnFrance($estNeeEnFrance)
    {
        $this->estNeeEnFrance = $estNeeEnFrance;

        return $this;
    }

    /**
     * Get estNeeEnFrance
     *
     * @return boolean 
     */
    public function getEstNeeEnFrance()
    {
        return $this->estNeeEnFrance;
    }

    /**
     * Set dateArriveeFrance
     *
     * @param \DateTime $dateArriveeFrance
     * @return Candidat
     */
    public function setDateArriveeFrance($dateArriveeFrance)
    {
        $this->dateArriveeFrance = $dateArriveeFrance;

        return $this;
    }

    /**
     * Get dateArriveeFrance
     *
     * @return \DateTime 
     */
    public function getDateArriveeFrance()
    {
        return $this->dateArriveeFrance;
    }

    /**
     * Set dateArriveeToulouse
     *
     * @param \DateTime $dateArriveeToulouse
     * @return Candidat
     */
    public function setDateArriveeToulouse($dateArriveeToulouse)
    {
        $this->dateArriveeToulouse = $dateArriveeToulouse;

        return $this;
    }

    /**
     * Get dateArriveeToulouse
     *
     * @return \DateTime 
     */
    public function getDateArriveeToulouse()
    {
        return $this->dateArriveeToulouse;
    }

    /**
     * Set estCelibataire
     *
     * @param boolean $estCelibataire
     * @return Candidat
     */
    public function setEstCelibataire($estCelibataire)
    {
        $this->estCelibataire = $estCelibataire;

        return $this;
    }

    /**
     * Get estCelibataire
     *
     * @return boolean 
     */
    public function getEstCelibataire()
    {
        return $this->estCelibataire;
    }

    /**
     * Set dejaMarie
     *
     * @param boolean $dejaMarie
     * @return Candidat
     */
    public function setDejaMarie($dejaMarie)
    {
        $this->dejaMarie = $dejaMarie;

        return $this;
    }

    /**
     * Get dejaMarie
     *
     * @return boolean 
     */
    public function getDejaMarie()
    {
        return $this->dejaMarie;
    }

    /**
     * Set dejaMarieCivilement
     *
     * @param boolean $dejaMarieCivilement
     * @return Candidat
     */
    public function setDejaMarieCivilement($dejaMarieCivilement)
    {
        $this->dejaMarieCivilement = $dejaMarieCivilement;

        return $this;
    }

    /**
     * Get dejaMarieCivilement
     *
     * @return boolean 
     */
    public function getDejaMarieCivilement()
    {
        return $this->dejaMarieCivilement;
    }

    /**
     * Set divorce
     *
     * @param boolean $divorce
     * @return Candidat
     */
    public function setDivorce($divorce)
    {
        $this->divorce = $divorce;

        return $this;
    }

    /**
     * Get divorce
     *
     * @return boolean 
     */
    public function getDivorce()
    {
        return $this->divorce;
    }

    /**
     * Set dateDivorce
     *
     * @param \DateTime $dateDivorce
     * @return Candidat
     */
    public function setDateDivorce($dateDivorce)
    {
        $this->dateDivorce = $dateDivorce;

        return $this;
    }

    /**
     * Get dateDivorce
     *
     * @return \DateTime 
     */
    public function getDateDivorce()
    {
        return $this->dateDivorce;
    }

    /**
     * Set taille
     *
     * @param integer $taille
     * @return Candidat
     */
    public function setTaille($taille)
    {
        $this->taille = $taille;

        return $this;
    }

    /**
     * Get taille
     *
     * @return integer 
     */
    public function getTaille()
    {
        return $this->taille;
    }

    /**
     * Set poids
     *
     * @param integer $poids
     * @return Candidat
     */
    public function setPoids($poids)
    {
        $this->poids = $poids;

        return $this;
    }

    /**
     * Get poids
     *
     * @return integer 
     */
    public function getPoids()
    {
        return $this->poids;
    }

    /**
     * Set priereQuotidienne
     *
     * @param boolean $priereQuotidienne
     * @return Candidat
     */
    public function setPriereQuotidienne($priereQuotidienne)
    {
        $this->priereQuotidienne = $priereQuotidienne;

        return $this;
    }

    /**
     * Get priereQuotidienne
     *
     * @return boolean 
     */
    public function getPriereQuotidienne()
    {
        return $this->priereQuotidienne;
    }

    /**
     * Set dateDebutPriere
     *
     * @param \DateTime $dateDebutPriere
     * @return Candidat
     */
    public function setDateDebutPriere($dateDebutPriere)
    {
        $this->dateDebutPriere = $dateDebutPriere;

        return $this;
    }

    /**
     * Get dateDebutPriere
     *
     * @return \DateTime 
     */
    public function getDateDebutPriere()
    {
        return $this->dateDebutPriere;
    }

    /**
     * Set frequentationMosquee
     *
     * @param boolean $frequentationMosquee
     * @return Candidat
     */
    public function setFrequentationMosquee($frequentationMosquee)
    {
        $this->frequentationMosquee = $frequentationMosquee;

        return $this;
    }

    /**
     * Get frequentationMosquee
     *
     * @return boolean 
     */
    public function getFrequentationMosquee()
    {
        return $this->frequentationMosquee;
    }

    /**
     * Set estReconvertit
     *
     * @param boolean $estReconvertit
     * @return Candidat
     */
    public function setEstReconvertit($estReconvertit)
    {
        $this->estReconvertit = $estReconvertit;

        return $this;
    }

    /**
     * Get estReconvertit
     *
     * @return boolean 
     */
    public function getEstReconvertit()
    {
        return $this->estReconvertit;
    }

    /**
     * Set dateReconversion
     *
     * @param \DateTime $dateReconversion
     * @return Candidat
     */
    public function setDateReconversion($dateReconversion)
    {
        $this->dateReconversion = $dateReconversion;

        return $this;
    }

    /**
     * Get dateReconversion
     *
     * @return \DateTime 
     */
    public function getDateReconversion()
    {
        return $this->dateReconversion;
    }

    /**
     * Set hijra
     *
     * @param boolean $hijra
     * @return Candidat
     */
    public function setHijra($hijra)
    {
        $this->hijra = $hijra;

        return $this;
    }

    /**
     * Get hijra
     *
     * @return boolean 
     */
    public function getHijra()
    {
        return $this->hijra;
    }

    /**
     * Set fumeur
     *
     * @param boolean $fumeur
     * @return Candidat
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
     * Set arreterFumer
     *
     * @param boolean $arreterFumer
     * @return Candidat
     */
    public function setArreterFumer($arreterFumer)
    {
        $this->arreterFumer = $arreterFumer;

        return $this;
    }

    /**
     * Get arreterFumer
     *
     * @return boolean 
     */
    public function getArreterFumer()
    {
        return $this->arreterFumer;
    }

    /**
     * Set consoStup
     *
     * @param boolean $consoStup
     * @return Candidat
     */
    public function setConsoStup($consoStup)
    {
        $this->consoStup = $consoStup;

        return $this;
    }

    /**
     * Get consoStup
     *
     * @return boolean 
     */
    public function getConsoStup()
    {
        return $this->consoStup;
    }

    /**
     * Set consoAlcool
     *
     * @param boolean $consoAlcool
     * @return Candidat
     */
    public function setConsoAlcool($consoAlcool)
    {
        $this->consoAlcool = $consoAlcool;

        return $this;
    }

    /**
     * Get consoAlcool
     *
     * @return boolean 
     */
    public function getConsoAlcool()
    {
        return $this->consoAlcool;
    }

    /**
     * Set exigencesPhysique
     *
     * @param boolean $exigencesPhysique
     * @return Candidat
     */
    public function setExigencesPhysique($exigencesPhysique)
    {
        $this->exigencesPhysique = $exigencesPhysique;

        return $this;
    }

    /**
     * Get exigencesPhysique
     *
     * @return boolean 
     */
    public function getExigencesPhysique()
    {
        return $this->exigencesPhysique;
    }

    /**
     * Set tempsLibre
     *
     * @param string $tempsLibre
     * @return Candidat
     */
    public function setTempsLibre($tempsLibre)
    {
        $this->tempsLibre = $tempsLibre;

        return $this;
    }

    /**
     * Get tempsLibre
     *
     * @return string 
     */
    public function getTempsLibre()
    {
        return $this->tempsLibre;
    }

    /**
     * Set autreLangue
     *
     * @param string $autreLangue
     * @return Candidat
     */
    public function setAutreLangue($autreLangue)
    {
        $this->autreLangue = $autreLangue;

        return $this;
    }

    /**
     * Get autreLangue
     *
     * @return string 
     */
    public function getAutreLangue()
    {
        return $this->autreLangue;
    }

    /**
     * Set attenteMariage
     *
     * @param string $attenteMariage
     * @return Candidat
     */
    public function setAttenteMariage($attenteMariage)
    {
        $this->attenteMariage = $attenteMariage;

        return $this;
    }

    /**
     * Get attenteMariage
     *
     * @return string 
     */
    public function getAttenteMariage()
    {
        return $this->attenteMariage;
    }

    /**
     * Set presentationPerso
     *
     * @param string $presentationPerso
     * @return Candidat
     */
    public function setPresentationPerso($presentationPerso)
    {
        $this->presentationPerso = $presentationPerso;

        return $this;
    }

    /**
     * Get presentationPerso
     *
     * @return string 
     */
    public function getPresentationPerso()
    {
        return $this->presentationPerso;
    }

    /**
     * Set remarque
     *
     * @param string $remarque
     * @return Candidat
     */
    public function setRemarque($remarque)
    {
        $this->remarque = $remarque;

        return $this;
    }

    /**
     * Get remarque
     *
     * @return string 
     */
    public function getRemarque()
    {
        return $this->remarque;
    }

    /**
     * Set dateInscription
     *
     * @param \DateTime $dateInscription
     * @return Candidat
     */
    public function setDateInscription($dateInscription)
    {
        $this->dateInscription = $dateInscription;

        return $this;
    }

    /**
     * Get dateInscription
     *
     * @return \DateTime 
     */
    public function getDateInscription()
    {
        return $this->dateInscription;
    }

    /**
     * Set rechercheEmploi
     *
     * @param boolean $rechercheEmploi
     * @return Candidat
     */
    public function setRechercheEmploi($rechercheEmploi)
    {
        $this->rechercheEmploi = $rechercheEmploi;

        return $this;
    }

    /**
     * Get rechercheEmploi
     *
     * @return boolean 
     */
    public function getRechercheEmploi()
    {
        return $this->rechercheEmploi;
    }
}
