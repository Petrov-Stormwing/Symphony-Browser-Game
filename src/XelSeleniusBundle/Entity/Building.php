<?php

namespace XelSeleniusBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Building
 *
 * @ORM\Table(name="buildings")
 * @ORM\Entity(repositoryClass="XelSeleniusBundle\Repository\BuildingsRepository")
 */
class Building
{
    //VALUES FOR BUILDINGS AS FOLLOWS:
    //[LEVEL,MINERALS,HYDROGEN,YIELD,TIME(IN SECONDS)]
    const MINING_FACILITY_LEVEL_1=[1,64,24,50,30];
    const MINING_FACILITY_LEVEL_2=[1,128,48,150,120];
    const MINING_FACILITY_LEVEL_3=[1,256,96,500,360];

    const HYDROGEN_EXTRACTOR_LEVEL_1=[1,64,24,50,30];
    const HYDROGEN_EXTRACTOR_LEVEL_2=[1,128,48,150,120];
    const HYDROGEN_EXTRACTOR_LEVEL_3=[1,256,96,500,360];

    const SHIPYARD_LEVEL_1=[1,64,24,50,30];
    const SHIPYARD_LEVEL_2=[1,128,48,150,120];
    const SHIPYARD_LEVEL_3=[1,256,96,500,360];

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
     * @ORM\Column(name="type_id", type="integer")
     */
    private $typeId;

    /**
     * @var Building_Type
     * @ORM\ManyToOne(targetEntity="Building_Type", inversedBy="buildings")
     * @ORM\JoinColumn(name="type_id", referencedColumnName="id")
     */
    private $type;

    /**
     * @var int
     *
     * @ORM\Column(name="level", type="integer")
     */
    private $level;

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
     * @var string
     *
     * @ORM\Column(name="finished_on", type="string")
     */
    private $finishedOn;

    /**
     * @var int
     *
     * @ORM\Column(name="planet_id", type="integer")
     */
    private $planetId;

    /**
     * @var Planet
     * @ORM\ManyToOne(targetEntity="XelSeleniusBundle\Entity\Planet", inversedBy="buildings")
     * @ORM\JoinColumn(name="planet_id", referencedColumnName="id")
     */
    private $planet;

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
     * Set reqMinerals
     *
     * @param integer $reqMinerals
     *
     * @return Building
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
     * @return Building
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
     * @param \string $reqTime
     *
     * @return Building
     */
    public function setReqTime($reqTime)
    {
        $this->reqTime = $reqTime;

        return $this;
    }

    /**
     * Get reqTime
     *
     * @return \string
     */
    public function getReqTime()
    {
        return $this->reqTime;
    }

    /**
     * Set finishedOn
     *
     * @param string $finishedOn
     *
     * @return Building
     */
    public function setFinishedOn($finishedOn)
    {
        $this->finishedOn = $finishedOn;

        return $this;
    }

    /**
     * Get finishedOn
     *
     * @return string
     */
    public function getFinishedOn()
    {
        return $this->finishedOn;
    }

    /**
     * @return int
     */
    public function getPlanetId(): int
    {
        return $this->planetId;
    }

    /**
     * @param int $planetId
     */
    public function setPlanetId(int $planetId)
    {
        $this->planetId = $planetId;
    }

    /**
     * @return Planet
     */
    public function getPlanet(): Planet
    {
        return $this->planet;
    }

    /**
     * @param Planet $planet
     */
    public function setPlanet(Planet $planet)
    {
        $this->planet = $planet;
    }

    /**
     * @return int
     */
    public function getLevel(): int
    {
        return $this->level;
    }

    /**
     * @param int $level
     */
    public function setLevel(int $level)
    {
        $this->level = $level;
    }

    /**
     * @return Building_Type
     */
    public function getType(): Building_Type
    {
        return $this->type;
    }

    /**
     * @param Building_Type $type
     */
    public function setType(Building_Type $type)
    {
        $this->type = $type;
    }

    /**
     * @return int
     */
    public function getTypeId(): int
    {
        return $this->typeId;
    }

    /**
     * @param int $typeId
     */
    public function setTypeId(int $typeId)
    {
        $this->typeId = $typeId;
    }
}

