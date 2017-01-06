<?php

namespace AppBundle\Entity;

/**
 * InUserOffer
 */
class InUserOffer
{
    /**
     * @var integer
     */
    private $minPrice;

    /**
     * @var integer
     */
    private $maxPrice;

    /**
     * @var \DateTime
     */
    private $startDate;

    /**
     * @var \DateTime
     */
    private $enDate;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \AppBundle\Entity\InUser
     */
    private $user;

    /**
     * @var \AppBundle\Entity\InService
     */
    private $service;


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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
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
}

