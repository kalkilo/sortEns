<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Passager
 *
 * @ORM\Table(name="passager")
 * @ORM\Entity
 */
class Passager
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
     * @ORM\Column(name="id_utilisateur", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idUtilisateur;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_etape_vouage", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idEtapeVouage;



    /**
     * Set id
     *
     * @param integer $id
     *
     * @return Passager
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
     * Set idUtilisateur
     *
     * @param integer $idUtilisateur
     *
     * @return Passager
     */
    public function setIdUtilisateur($idUtilisateur)
    {
        $this->idUtilisateur = $idUtilisateur;

        return $this;
    }

    /**
     * Get idUtilisateur
     *
     * @return integer
     */
    public function getIdUtilisateur()
    {
        return $this->idUtilisateur;
    }

    /**
     * Set idEtapeVouage
     *
     * @param integer $idEtapeVouage
     *
     * @return Passager
     */
    public function setIdEtapeVouage($idEtapeVouage)
    {
        $this->idEtapeVouage = $idEtapeVouage;

        return $this;
    }

    /**
     * Get idEtapeVouage
     *
     * @return integer
     */
    public function getIdEtapeVouage()
    {
        return $this->idEtapeVouage;
    }
}
