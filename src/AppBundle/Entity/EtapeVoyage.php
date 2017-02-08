<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EtapeVoyage
 *
 * @ORM\Table(name="etape_voyage")
 * @ORM\Entity
 */
class EtapeVoyage
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_voyage", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idVoyage;

    /**
     * @var string
     *
     * @ORM\Column(name="ville_depart", type="string", length=45, nullable=false)
     */
    private $villeDepart;

    /**
     * @var string
     *
     * @ORM\Column(name="ville_arrivee", type="string", length=45, nullable=false)
     */
    private $villeArrivee;

    /**
     * @var string
     *
     * @ORM\Column(name="date_depart", type="string", length=45, nullable=false)
     */
    private $dateDepart;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_arrive", type="datetime", nullable=false)
     */
    private $dateArrive;

    /**
     * @var float
     *
     * @ORM\Column(name="prix", type="float", precision=10, scale=0, nullable=false)
     */
    private $prix;

    /**
     * @var string
     *
     * @ORM\Column(name="place_dispo", type="string", length=45, nullable=false)
     */
    private $placeDispo;



    /**
     * Set id
     *
     * @param integer $id
     *
     * @return EtapeVoyage
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

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
     * Set idVoyage
     *
     * @param integer $idVoyage
     *
     * @return EtapeVoyage
     */
    public function setIdVoyage($idVoyage)
    {
        $this->idVoyage = $idVoyage;

        return $this;
    }

    /**
     * Get idVoyage
     *
     * @return integer
     */
    public function getIdVoyage()
    {
        return $this->idVoyage;
    }

    /**
     * Set villeDepart
     *
     * @param string $villeDepart
     *
     * @return EtapeVoyage
     */
    public function setVilleDepart($villeDepart)
    {
        $this->villeDepart = $villeDepart;

        return $this;
    }

    /**
     * Get villeDepart
     *
     * @return string
     */
    public function getVilleDepart()
    {
        return $this->villeDepart;
    }

    /**
     * Set villeArrivee
     *
     * @param string $villeArrivee
     *
     * @return EtapeVoyage
     */
    public function setVilleArrivee($villeArrivee)
    {
        $this->villeArrivee = $villeArrivee;

        return $this;
    }

    /**
     * Get villeArrivee
     *
     * @return string
     */
    public function getVilleArrivee()
    {
        return $this->villeArrivee;
    }

    /**
     * Set dateDepart
     *
     * @param string $dateDepart
     *
     * @return EtapeVoyage
     */
    public function setDateDepart($dateDepart)
    {
        $this->dateDepart = $dateDepart;

        return $this;
    }

    /**
     * Get dateDepart
     *
     * @return string
     */
    public function getDateDepart()
    {
        return $this->dateDepart;
    }

    /**
     * Set dateArrive
     *
     * @param \DateTime $dateArrive
     *
     * @return EtapeVoyage
     */
    public function setDateArrive($dateArrive)
    {
        $this->dateArrive = $dateArrive;

        return $this;
    }

    /**
     * Get dateArrive
     *
     * @return \DateTime
     */
    public function getDateArrive()
    {
        return $this->dateArrive;
    }

    /**
     * Set prix
     *
     * @param float $prix
     *
     * @return EtapeVoyage
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return float
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set placeDispo
     *
     * @param string $placeDispo
     *
     * @return EtapeVoyage
     */
    public function setPlaceDispo($placeDispo)
    {
        $this->placeDispo = $placeDispo;

        return $this;
    }

    /**
     * Get placeDispo
     *
     * @return string
     */
    public function getPlaceDispo()
    {
        return $this->placeDispo;
    }
}
