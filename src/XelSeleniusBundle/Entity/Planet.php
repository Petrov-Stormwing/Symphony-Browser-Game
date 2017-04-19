<?php

namespace XelSeleniusBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Planet
 *
 * @ORM\Table(name="planets")
 * @ORM\Entity(repositoryClass="XelSeleniusBundle\Repository\PlanetRepository")
 */
class Planet
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
     * @var int
     *
     * @ORM\Column(name="size", type="integer")
     */
    private $size;

    /**
     * @var array
     *
     * @ORM\Column(name="buildings", type="array")
     */
    private $buildings;

    /**
     * @var array
     *
     * @ORM\Column(name="ships", type="array")
     */
    private $ships;

    /**
     * @var string
     *
     * @ORM\Column(name="storage", type="array")
     */
    private $storage;

    /**
     * @var array
     *
     * @ORM\Column(name="yield", type="array")
     */
    private $yield;

    /**
     * @var array
     *
     * @ORM\Column(name="coordinates", type="array")
     */
    private $coordinates;

    /**
     * @var int
     *
     * @ORM\Column(name="user_id", type="integer")
     */
    private $userId;

    /**
     * @var User
     * @ORM\ManyToOne(targetEntity="XelSeleniusBundle\Entity\User", inversedBy="planets")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $user;

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
     * Set size
     *
     * @param integer $size
     *
     * @return Planet
     */
    public function setSize($size)
    {
        $this->size = $size;

        return $this;
    }

    /**
     * Get size
     *
     * @return int
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * Set buildings
     *
     * @param array $buildings
     *
     * @return Planet
     */
    public function setBuildings($buildings)
    {
        $this->buildings = $buildings;

        return $this;
    }

    /**
     * Get buildings
     *
     * @return array
     */
    public function getBuildings()
    {
        return $this->buildings;
    }

    /**
     * Set ships
     *
     * @param array $ships
     *
     * @return Planet
     */
    public function setShips($ships)
    {
        $this->ships = $ships;

        return $this;
    }

    /**
     * Get ships
     *
     * @return array
     */
    public function getShips()
    {
        return $this->ships;
    }

    /**
     * @return string
     */
    public function getStorage()
    {
        return $this->storage;
    }

    /**
     * @param string $storage
     */
    public function setStorage($storage)
    {
        $this->storage = $storage;
    }

    /**
     * @return array
     */
    public function getYield()
    {
        return $this->yield;
    }

    /**
     * @param array $yield
     */
    public function setYield($yield)
    {
        $this->yield = $yield;
    }

    /**
     * @return mixed
     */
    public function getCoordinates()
    {
        return $this->coordinates;
    }

    /**
     * @param mixed $coordinates
     */
    public function setCoordinates($coordinates)
    {
        $this->coordinates = $coordinates;
    }

    /**
     * Get userId
     *
     * @return int
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set userId
     *
     * @param integer $userId
     *
     * @return Planet
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * @return User
     */
    public function getUser(): User
    {
        return $this->user;
    }

    /**
     * @param User $user
     * @return Planet
     */
    public function setUser(User $user=null)
    {
        $this->user = $user;
        return $this;
    }
}

