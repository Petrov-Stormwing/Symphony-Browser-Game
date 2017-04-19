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
     * @var array
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

    private $coordinates;

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
     * @return array
     */
    public function getStorage(): array
    {
        return $this->storage;
    }

    /**
     * @param array $storage
     */
    public function setStorage(array $storage)
    {
        $this->storage = $storage;
    }

    /**
     * @return array
     */
    public function getYield(): array
    {
        return $this->yield;
    }

    /**
     * @param array $yield
     */
    public function setYield(array $yield)
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
}

