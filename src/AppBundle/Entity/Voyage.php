<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Voyage
 *
 * @ORM\Table(name="voyage")
 * @ORM\Entity
 */
class Voyage
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
     * @ORM\Column(name="id_conducteur", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idConducteur;

    /**
     * @var integer
     *
     * @ORM\Column(name="places_totales", type="integer", nullable=false)
     */
    private $placesTotales;

    /**
     * @var integer
     *
     * @ORM\Column(name="taille_bagage", type="integer", nullable=false)
     */
    private $tailleBagage;

    /**
     * @var string
     *
     * @ORM\Column(name="message", type="string", length=45, nullable=true)
     */
    private $message;

    /**
     * @var string
     *
     * @ORM\Column(name="flex_temps", type="string", length=45, nullable=true)
     */
    private $flexTemps;

    /**
     * @var string
     *
     * @ORM\Column(name="flex_km", type="string", length=45, nullable=true)
     */
    private $flexKm;



    /**
     * Set id
     *
     * @param integer $id
     *
     * @return Voyage
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
     * Set idConducteur
     *
     * @param integer $idConducteur
     *
     * @return Voyage
     */
    public function setIdConducteur($idConducteur)
    {
        $this->idConducteur = $idConducteur;

        return $this;
    }

    /**
     * Get idConducteur
     *
     * @return integer
     */
    public function getIdConducteur()
    {
        return $this->idConducteur;
    }

    /**
     * Set placesTotales
     *
     * @param integer $placesTotales
     *
     * @return Voyage
     */
    public function setPlacesTotales($placesTotales)
    {
        $this->placesTotales = $placesTotales;

        return $this;
    }

    /**
     * Get placesTotales
     *
     * @return integer
     */
    public function getPlacesTotales()
    {
        return $this->placesTotales;
    }

    /**
     * Set tailleBagage
     *
     * @param integer $tailleBagage
     *
     * @return Voyage
     */
    public function setTailleBagage($tailleBagage)
    {
        $this->tailleBagage = $tailleBagage;

        return $this;
    }

    /**
     * Get tailleBagage
     *
     * @return integer
     */
    public function getTailleBagage()
    {
        return $this->tailleBagage;
    }

    /**
     * Set message
     *
     * @param string $message
     *
     * @return Voyage
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Get message
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set flexTemps
     *
     * @param string $flexTemps
     *
     * @return Voyage
     */
    public function setFlexTemps($flexTemps)
    {
        $this->flexTemps = $flexTemps;

        return $this;
    }

    /**
     * Get flexTemps
     *
     * @return string
     */
    public function getFlexTemps()
    {
        return $this->flexTemps;
    }

    /**
     * Set flexKm
     *
     * @param string $flexKm
     *
     * @return Voyage
     */
    public function setFlexKm($flexKm)
    {
        $this->flexKm = $flexKm;

        return $this;
    }

    /**
     * Get flexKm
     *
     * @return string
     */
    public function getFlexKm()
    {
        return $this->flexKm;
    }
}
