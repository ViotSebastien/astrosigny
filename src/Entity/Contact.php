<?php
namespace App\Entity;
use Symfony\Component\Routing\Annotation\Assert;

class Contact
{
    /**
      * @Assert\NotBlank
    */
    protected $name;
    /**
      * @Assert\NotBlank
    */
    protected $email;
    /**
     * @Assert\NotBlank
     * @Assert\Type("\DateTime")
    */
    protected $dueDate;
    /**
      * @Assert\NotBlank
    */
    protected $text;

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }
    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getDueDate()
    {
        return $this->dueDate;
    }

    public function getText()
    {
        return $this->text;
    }

    public function setText($text)
    {
        $this->text = $text;
    }

    public function setDueDate(\DateTime $dueDate = null)
    {
        $this->dueDate = $dueDate;
    }
}
