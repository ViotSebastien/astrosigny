<?php

namespace App\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;
/**
 * @MongoDB\Document
 */
class User
{
    /**
     * @MongoDB\Id
     */
    protected $id;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $username;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $password;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $email;

    public function getId()
    {
      return $this->id;
    }
    public function setId($id)
    {
      return $this->id=$id;
    }
    public function setEmail($email)
    {
      return $this->email=$email;
    }
    public function getEmail()
    {
      return $this->email;
    }
    public function setUsername($username)
    {
      return $this->username=$username;
    }
    public function getUsername()
    {
      return $this->username;
    }
    public function setPassword($password)
    {
      return $this->password=$password;
    }
    public function getPassword()
    {
      return $this->password;
    }

}
