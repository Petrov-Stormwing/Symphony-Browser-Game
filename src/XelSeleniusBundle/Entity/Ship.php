<?php

namespace XelSeleniusBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ship
 *
 * @ORM\Table(name="ship")
 * @ORM\Entity(repositoryClass="XelSeleniusBundle\Repository\ShipRepository")
 */
class Ship
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
     * @ORM\Column(name="type", type="string", length=255)
     */
    private $type;

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
     * @var string
     *
     * @ORM\Column(name="req_time", type="string", length=255)
     */
    private $reqTime;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="started_on", type="datetime")
     */
    private $startedOn;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="finish_on", type="datetime")
     */
    private $finishOn;


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
     * Set type
     *
     * @param string $type
     *
     * @return Ship
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set reqMinerals
     *
     * @param integer $reqMinerals
     *
     * @return Ship
     */
    public function setReqMinerals($reqMinerals)
    {
        $this->reqMinerals = $reqMinerals;

        return $this;
    }

    /**
     * Get reqMinerals
     *
     * @return int
     */
    public function getReqMinerals()
    {
        return $this->reqMinerals;
    }

    /**
     * Set reqHydrogen
     *
     * @param integer $reqHydrogen
     *
     * @return Ship
     */
    public function setReqHydrogen($reqHydrogen)
    {
        $this->reqHydrogen = $reqHydrogen;

        return $this;
    }

    /**
     * Get reqHydrogen
     *
     * @return int
     */
    public function getReqHydrogen()
    {
        return $this->reqHydrogen;
    }

    /**
     * Set reqTime
     *
     * @param string $reqTime
     *
     * @return Ship
     */
    public function setReqTime($reqTime)
    {
        $this->reqTime = $reqTime;

        return $this;
    }

    /**
     * Get reqTime
     *
     * @return string
     */
    public function getReqTime()
    {
        return $this->reqTime;
    }

    /**
     * Set startedOn
     *
     * @param \DateTime $startedOn
     *
     * @return Ship
     */
    public function setStartedOn($startedOn)
    {
        $this->startedOn = $startedOn;

        return $this;
    }

    /**
     * Get startedOn
     *
     * @return \DateTime
     */
    public function getStartedOn()
    {
        return $this->startedOn;
    }

    /**
     * Set finishOn
     *
     * @param \DateTime $finishOn
     *
     * @return Ship
     */
    public function setFinishOn($finishOn)
    {
        $this->finishOn = $finishOn;

        return $this;
    }

    /**
     * Get finishOn
     *
     * @return \DateTime
     */
    public function getFinishOn()
    {
        return $this->finishOn;
    }
}

