<?php

namespace App\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;
/**
 * @MongoDB\Document
 */
class Manifestation
{
    /**
     * @MongoDB\Id
     */
    protected $id;

    /**
     * @MongoDB\Field(type="date")
     */
    protected $datedebut;

    /**
     * @MongoDB\Field(type="date")
     */
    protected $datefin;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $titre;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $description;

    public function getId()
    {
      return $this->id;
    }
    public function setId($id)
    {
      return $this->id=$id;
    }
    public function setTitre($titre)
    {
      return $this->titre=$titre;
    }
    public function getTitre()
    {
      return $this->titre;
    }
    public function setDescription($description)
    {
      return $this->description=$description;
    }
    public function getDescription()
    {
      return $this->description;
    }
    public function setDateFin($datefin)
    {
      return $this->datefin=$datefin;
    }
    public function getDateFin()
    {
      return $this->datefin;
    }
    public function getDateDebut()
    {
      return $this->datedebut;
    }
    public function setDateDebut($datedebut)
    {
      return $this->datedebut=$datedebut;
    }

}
