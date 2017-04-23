<?php

namespace XelSeleniusBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Buildings_Type
 *
 * @ORM\Table(name="buildings__type")
 * @ORM\Entity(repositoryClass="XelSeleniusBundle\Repository\Buildings_TypeRepository")
 */
class Buildings_Type
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
     * @var string
     *
     * @ORM\Column(name="added_on", type="datetime")
     */
    private $added_on;

    /**
     * @var ArrayCollection
     *
     * @ORM\OneToMany(targetEntity="XelSeleniusBundle\Entity\Buildings", mappedBy="type")
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
     * @return Buildings_Type
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
}

