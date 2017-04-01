<?php

namespace XelSeleniusBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Users
 *
 * @ORM\Table(name="users")
 * @ORM\Entity(repositoryClass="XelSeleniusBundle\Repository\UsersRepository")
 */
class Users
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
     *
     * @ORM\Column(name="username", type="string", length=255, unique=true)
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, unique=true)
     */
    private $email;

    /**
     * @var int
     *
     * @ORM\Column(name="dark_energy", type="integer")
     */
    private $darkEnergy;

    /**
     * @var int
     *
     * @ORM\Column(name="strange_matter", type="integer")
     */
    private $strangeMatter;

    /**
     * @var int
     *
     * @ORM\Column(name="exotic_matter", type="integer")
     */
    private $exoticMatter;

    /**
     * @var array
     *
     * @ORM\Column(name="science_progress", type="array")
     */
    private $scienceProgress;

    /**
     * @var array
     *
     * @ORM\Column(name="tech_progress", type="array")
     */
    private $techProgress;


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
     * @return Users
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
     * @return Users
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
     * @return Users
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
     * Set darkEnergy
     *
     * @param integer $darkEnergy
     *
     * @return Users
     */
    public function setDarkEnergy($darkEnergy)
    {
        $this->darkEnergy = $darkEnergy;

        return $this;
    }

    /**
     * Get darkEnergy
     *
     * @return int
     */
    public function getDarkEnergy()
    {
        return $this->darkEnergy;
    }

    /**
     * Set strangeMatter
     *
     * @param integer $strangeMatter
     *
     * @return Users
     */
    public function setStrangeMatter($strangeMatter)
    {
        $this->strangeMatter = $strangeMatter;

        return $this;
    }

    /**
     * Get strangeMatter
     *
     * @return int
     */
    public function getStrangeMatter()
    {
        return $this->strangeMatter;
    }

    /**
     * Set exoticMatter
     *
     * @param integer $exoticMatter
     *
     * @return Users
     */
    public function setExoticMatter($exoticMatter)
    {
        $this->exoticMatter = $exoticMatter;

        return $this;
    }

    /**
     * Get exoticMatter
     *
     * @return int
     */
    public function getExoticMatter()
    {
        return $this->exoticMatter;
    }

    /**
     * Set scienceProgress
     *
     * @param array $scienceProgress
     *
     * @return Users
     */
    public function setScienceProgress($scienceProgress)
    {
        $this->scienceProgress = $scienceProgress;

        return $this;
    }

    /**
     * Get scienceProgress
     *
     * @return array
     */
    public function getScienceProgress()
    {
        return $this->scienceProgress;
    }

    /**
     * Set techProgress
     *
     * @param array $techProgress
     *
     * @return Users
     */
    public function setTechProgress($techProgress)
    {
        $this->techProgress = $techProgress;

        return $this;
    }

    /**
     * Get techProgress
     *
     * @return array
     */
    public function getTechProgress()
    {
        return $this->techProgress;
    }
}

