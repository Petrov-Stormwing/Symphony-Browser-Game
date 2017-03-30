<?php

namespace XelSeleniusBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Planets
 *
 * @ORM\Table(name="planets")
 * @ORM\Entity(repositoryClass="XelSeleniusBundle\Repository\PlanetsRepository")
 */
class Planets
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
     * @ORM\Column(name="atmosphere", type="string", length=255)
     */
    private $atmosphere;

    /**
     * @var int
     *
     * @ORM\Column(name="temperature", type="integer")
     */
    private $temperature;

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
     * Set atmosphere
     *
     * @param string $atmosphere
     *
     * @return Planets
     */
    public function setAtmosphere($atmosphere)
    {
        $this->atmosphere = $atmosphere;

        return $this;
    }

    /**
     * Get atmosphere
     *
     * @return string
     */
    public function getAtmosphere()
    {
        return $this->atmosphere;
    }

    /**
     * Set size
     *
     * @param integer $size
     *
     * @return Planets
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
     * @return Planets
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
     * @return Planets
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
}

