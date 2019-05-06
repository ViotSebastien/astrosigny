<?php

namespace App\Document;

use Symfony\Component\Security\Core\User\UserInterface;
use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;
/**
 * @MongoDB\Document
 */
class User implements UserInterface
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
    /**
     * @MongoDB\Field(type="collection")
     */
     protected $roles = [];

     public function getRoles(): array
     {
         $roles = $this->roles;
         // guarantee every user at least has ROLE_USER
         $roles[] = 'ROLE_USER';

         return array_unique($roles);
     }

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

    public function getPlainPassword()
    {
        return $this->plainPassword;
    }

    public function setPlainPassword($password)
    {
        $this->plainPassword = $password;
    }

    public function getSalt()
    {
        // The bcrypt and argon2i algorithms don't require a separate salt.
        // You *may* need a real salt if you choose a different encoder.
        return null;
    }
    public function eraseCredentials()
    {
    }
}
