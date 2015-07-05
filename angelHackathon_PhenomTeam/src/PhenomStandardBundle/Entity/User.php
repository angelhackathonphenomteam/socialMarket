<?php

namespace PhenomStandardBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use PhenomStandardBundle\PhenomStandardBundle;

/**
 * User
 *
 * @ORM\Table(name="User")
 * @ORM\Entity
 */
class User
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
     * @ORM\ManyToMany(targetEntity="Role", mappedBy="User")
     */
    private $roles;

    public function __construct()
    {
        $this->roles = new ArrayCollection();
        $this->carts = new ArrayCollection();
        $this->comments = new ArrayCollection();
    }

    public function addRole(\PhenomStandardBundle\Entity\Role $roles)
    {
        $this->roles[] = $roles;
    }

    /**
     * @ORM\OneToOne(targetEntity="Shop")
     */
    private $shop;


    /**
     * @ORM\OneToMany(targetEntity="Cart", mappedBy="user")
     */
    protected $carts;


    public function addCarts(\PhenomStandardBundle\Entity\Cart $carts)
    {
        $this->carts[] = $carts;
    }


    /**
     * @ORM\OneToMany(targetEntity="Comment", mappedBy="user")
     */
    protected $comments;


    public function addComments(\PhenomStandardBundle\Entity\Comment $comments)
    {
        $this->comments[] = $comments;
    }



    /**
     * @var string
     *
     * @ORM\Column(name="firstname", type="string", length=255)
     */
    private $firstname;

    /**
     * @var string
     *
     * @ORM\Column(name="lastname", type="string", length=255)
     */
    private $lastname;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=100)
     */
    private $password;


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
     * Set firstname
     *
     * @param string $firstname
     * @return User
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get firstname
     *
     * @return string 
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set lastname
     *
     * @param string $lastname
     * @return User
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get lastname
     *
     * @return string 
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return User
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return User
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Remove roles
     *
     * @param \PhenomStandardBundle\Entity\Role $roles
     */
    public function removeRole(\PhenomStandardBundle\Entity\Role $roles)
    {
        $this->roles->removeElement($roles);
    }

    /**
     * Get roles
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getRoles()
    {
        return $this->roles;
    }

    /**
     * Set shop
     *
     * @param \PhenomStandardBundle\Entity\Shop $shop
     * @return User
     */
    public function setShop(\PhenomStandardBundle\Entity\Shop $shop = null)
    {
        $this->shop = $shop;

        return $this;
    }

    /**
     * Get shop
     *
     * @return \PhenomStandardBundle\Entity\Shop 
     */
    public function getShop()
    {
        return $this->shop;
    }

    /**
     * Add carts
     *
     * @param \PhenomStandardBundle\Entity\Cart $carts
     * @return User
     */
    public function addCart(\PhenomStandardBundle\Entity\Cart $carts)
    {
        $this->carts[] = $carts;

        return $this;
    }

    /**
     * Remove carts
     *
     * @param \PhenomStandardBundle\Entity\Cart $carts
     */
    public function removeCart(\PhenomStandardBundle\Entity\Cart $carts)
    {
        $this->carts->removeElement($carts);
    }

    /**
     * Get carts
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCarts()
    {
        return $this->carts;
    }

    /**
     * Add comments
     *
     * @param \PhenomStandardBundle\Entity\Comment $comments
     * @return User
     */
    public function addComment(\PhenomStandardBundle\Entity\Comment $comments)
    {
        $this->comments[] = $comments;

        return $this;
    }

    /**
     * Remove comments
     *
     * @param \PhenomStandardBundle\Entity\Comment $comments
     */
    public function removeComment(\PhenomStandardBundle\Entity\Comment $comments)
    {
        $this->comments->removeElement($comments);
    }

    /**
     * Get comments
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getComments()
    {
        return $this->comments;
    }
}
