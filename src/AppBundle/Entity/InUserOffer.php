<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * InUserOffer
 *
 * @ORM\Table(name="in_user_offer", indexes={@ORM\Index(name="FK_in_user_id", columns={"user_id"}), @ORM\Index(name="FK_in_service_id", columns={"service_id"})})
 * @ORM\Entity
 */
class InUserOffer
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="min_price", type="integer", nullable=true)
     */
    private $minPrice;

    /**
     * @var integer
     *
     * @ORM\Column(name="max_price", type="integer", nullable=true)
     */
    private $maxPrice;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="start_date", type="date", nullable=true)
     */
    private $startDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="en_date", type="date", nullable=true)
     */
    private $enDate;

    /**
     * @var \AppBundle\Entity\InService
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\InService")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="service_id", referencedColumnName="id")
     * })
     */
    private $service;

    /**
     * @var \AppBundle\Entity\InUser
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\InUser")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     * })
     */
    private $user;



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
     * Set minPrice
     *
     * @param integer $minPrice
     *
     * @return InUserOffer
     */
    public function setMinPrice($minPrice)
    {
        $this->minPrice = $minPrice;

        return $this;
    }

    /**
     * Get minPrice
     *
     * @return integer
     */
    public function getMinPrice()
    {
        return $this->minPrice;
    }

    /**
     * Set maxPrice
     *
     * @param integer $maxPrice
     *
     * @return InUserOffer
     */
    public function setMaxPrice($maxPrice)
    {
        $this->maxPrice = $maxPrice;

        return $this;
    }

    /**
     * Get maxPrice
     *
     * @return integer
     */
    public function getMaxPrice()
    {
        return $this->maxPrice;
    }

    /**
     * Set startDate
     *
     * @param \DateTime $startDate
     *
     * @return InUserOffer
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;

        return $this;
    }

    /**
     * Get startDate
     *
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * Set enDate
     *
     * @param \DateTime $enDate
     *
     * @return InUserOffer
     */
    public function setEnDate($enDate)
    {
        $this->enDate = $enDate;

        return $this;
    }

    /**
     * Get enDate
     *
     * @return \DateTime
     */
    public function getEnDate()
    {
        return $this->enDate;
    }

    /**
     * Set service
     *
     * @param \AppBundle\Entity\InService $service
     *
     * @return InUserOffer
     */
    public function setService(\AppBundle\Entity\InService $service = null)
    {
        $this->service = $service;

        return $this;
    }

    /**
     * Get service
     *
     * @return \AppBundle\Entity\InService
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * Set user
     *
     * @param \AppBundle\Entity\InUser $user
     *
     * @return InUserOffer
     */
    public function setUser(\AppBundle\Entity\InUser $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \AppBundle\Entity\InUser
     */
    public function getUser()
    {
        return $this->user;
    }
}
