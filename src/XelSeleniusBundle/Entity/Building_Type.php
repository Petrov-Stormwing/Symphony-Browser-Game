<?php

namespace XelSeleniusBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Building_Type
 *
 * @ORM\Table(name="buildings_type")
 * @ORM\Entity(repositoryClass="XelSeleniusBundle\Repository\Buildings_TypeRepository")
 */
class Building_Type
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
     * @ORM\Column(name="name", type="string", length=255, unique=true)
     */
    private $name;

    /**
     * @var int
     *
     * @ORM\Column(name="req_minerals", type="integer")
     */
    private $reqMinerals;

    /**
     * @var int
     *
     * @ORM\Column(name="req_hydrogen", type="integer")
     */
    private $reqHydrogen;

    /**
     * @var \string
     *
     * @ORM\Column(name="req_time", type="string")
     */
    private $reqTime;

    /**
     * @var int
     *
     * @ORM\Column(name="yield", type="integer")
     */
    private $yield;

    /**
     * @var string
     *
     * @ORM\Column(name="added_on", type="datetime")
     */
    private $added_on;

    /**
     * @var ArrayCollection
     *
     * @ORM\OneToMany(targetEntity="Building", mappedBy="type")
     */
    private $buildings;


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
     * Set name
     *
     * @param string $name
     *
     * @return Building_Type
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getAddedOn(): string
    {
        return $this->added_on;
    }

    /**
     * @param string $added_on
     */
    public function setAddedOn(string $added_on)
    {
        $this->added_on = $added_on;
    }

    /**
     * @return int
     */
    public function getReqMinerals(): int
    {
        return $this->reqMinerals;
    }

    /**
     * @param int $reqMinerals
     */
    public function setReqMinerals(int $reqMinerals)
    {
        $this->reqMinerals = $reqMinerals;
    }

    /**
     * @return int
     */
    public function getReqHydrogen(): int
    {
        return $this->reqHydrogen;
    }

    /**
     * @param int $reqHydrogen
     */
    public function setReqHydrogen(int $reqHydrogen)
    {
        $this->reqHydrogen = $reqHydrogen;
    }

    /**
     * @return \string
     */
    public function getReqTime(): string
    {
        return $this->reqTime;
    }

    /**
     * @param \string $reqTime
     */
    public function setReqTime(string $reqTime)
    {
        $this->reqTime = $reqTime;
    }

    /**
     * @return int
     */
    public function getYield(): int
    {
        return $this->yield;
    }

    /**
     * @param int $yield
     */
    public function setYield(int $yield)
    {
        $this->yield = $yield;
    }
}

