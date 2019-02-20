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
    public function setDescription($description)
    {
      return $this->description=$description;
    }
    public function setDateFin($datefin)
    {
      return $this->datefin=$datefin;
    }
    public function setDateDebut($datedebut)
    {
      return $this->datedebut=$datedebut;
    }
}
