<?php

namespace XelSeleniusBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * User
 *
 * @ORM\Table(name="users")
 * @ORM\Entity(repositoryClass="XelSeleniusBundle\Repository\UserRepository")
 */
class User implements UserInterface
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     * @Assert\NotBlank()
     * @ORM\Column(name="username", type="string", length=255, unique=true)
     */
    private $username;

    /**
     * @var string
     * @Assert\NotBlank()
     * @ORM\Column(name="password", type="string", length=255)
     */
    private $password;

    /**
     * @var string
     * @Assert\Email()
     * @ORM\Column(name="email", type="string", length=255, unique=true)
     */
    private $email;

    /**
     * @var Role[]|ArrayCollection
     * @ORM\ManyToMany(targetEntity="XelSeleniusBundle\Entity\Role",inversedBy="users")
     * @ORM\JoinTable(name="user_roles", joinColumns={@ORM\JoinColumn(name="user_id", referencedColumnName="id")}, inverseJoinColumns={@ORM\JoinColumn(name="role_id", referencedColumnName="id")})
     */
    private $roles;

    /**
     * @var ArrayCollection
     *
     * @ORM\OneToMany(targetEntity="XelSeleniusBundle\Entity\SupportTicket", mappedBy="user")
     */
    private $supportTickets;

    /**
     * @var ArrayCollection
     *
     * @ORM\OneToMany(targetEntity="XelSeleniusBundle\Entity\Planet", mappedBy="user")
     */
    private $planets;

    public function __construct()
    {
        $this->roles=new ArrayCollection();
        $this->supportTickets=new ArrayCollection();
        $this->planets=new ArrayCollection();
    }

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set username
     *
     * @param string $username
     *
     * @return User
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set password
     *
     * @param string $password
     *
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
     * Set email
     *
     * @param string $email
     *
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
     * Returns the roles granted to the user.
     *
     * <code>
     * public function getRoles()
     * {
     *     return array('ROLE_USER');
     * }
     * </code>
     *
     * Alternatively, the roles might be stored on a ``roles`` property,
     * and populated in any number of different ways when the user object
     * is created.
     *
     * @return (Role|string)[] The user roles
     */
    public function getRoles()
    {
        return array_map(function (Role $role){ return $role->getName();},$this->roles->toArray());
    }

    /**
     * Returns the salt that was originally used to encode the password.
     *
     * This can return null if the password was not encoded using a salt.
     *
     * @return string|null The salt
     */
    public function getSalt()
    {
        return null;
    }

    /**
     * Removes sensitive data from the user.
     *
     * This is important if, at any given point, sensitive information like
     * the plain-text password is stored on this object.
     */
    public function eraseCredentials()
    {
        // TODO: Implement eraseCredentials() method.
    }

    public function addRole(Role $role)
    {
        $this->roles->add($role);
    }

    /**
     * @return ArrayCollection
     */
    public function getSupportTickets(): ArrayCollection
    {
        return $this->supportTickets;
    }

    /**
     * @param SupportTicket $supportTickets
     * @return User
     */
    public function addSupportTickets(SupportTicket $supportTickets)
    {
        $this->supportTickets[] = $supportTickets;
        return $this;
    }

    /**
     * @return ArrayCollection
     */
    public function getPlanet(): ArrayCollection
    {
        return $this->planets;
    }

    /**
     * @param Planet $planets
     * @return User
     */
    public function setPlanet($planets)
    {
        $this->planets = $planets;
        return $this;
    }
}

