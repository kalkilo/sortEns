<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commentaire
 *
 * @ORM\Table(name="commentaire")
 * @ORM\Entity
 */
class Commentaire
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
     * @ORM\Column(name="id_noteur", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idNoteur;

    /**
     * @var string
     *
     * @ORM\Column(name="id_notee", type="string", length=45, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idNotee;

    /**
     * @var integer
     *
     * @ORM\Column(name="note", type="integer", nullable=false)
     */
    private $note;

    /**
     * @var string
     *
     * @ORM\Column(name="texte", type="text", length=65535, nullable=true)
     */
    private $texte;



    /**
     * Set id
     *
     * @param integer $id
     *
     * @return Commentaire
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
     * Set idNoteur
     *
     * @param integer $idNoteur
     *
     * @return Commentaire
     */
    public function setIdNoteur($idNoteur)
    {
        $this->idNoteur = $idNoteur;

        return $this;
    }

    /**
     * Get idNoteur
     *
     * @return integer
     */
    public function getIdNoteur()
    {
        return $this->idNoteur;
    }

    /**
     * Set idNotee
     *
     * @param string $idNotee
     *
     * @return Commentaire
     */
    public function setIdNotee($idNotee)
    {
        $this->idNotee = $idNotee;

        return $this;
    }

    /**
     * Get idNotee
     *
     * @return string
     */
    public function getIdNotee()
    {
        return $this->idNotee;
    }

    /**
     * Set note
     *
     * @param integer $note
     *
     * @return Commentaire
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Get note
     *
     * @return integer
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Set texte
     *
     * @param string $texte
     *
     * @return Commentaire
     */
    public function setTexte($texte)
    {
        $this->texte = $texte;

        return $this;
    }

    /**
     * Get texte
     *
     * @return string
     */
    public function getTexte()
    {
        return $this->texte;
    }
}
