<?php

namespace AppBundle\Entity;

/**
 * UserServices
 */
class UserServices
{
    /**
     * @var integer
     */
    private $price;

    /**
     * @var integer
     */
    private $userId;

    /**
     * @var \AppBundle\Entity\Services
     */
    private $service;


    /**
     * Set price
     *
     * @param integer $price
     *
     * @return UserServices
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return integer
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set userId
     *
     * @param integer $userId
     *
     * @return UserServices
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get userId
     *
     * @return integer
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set service
     *
     * @param \AppBundle\Entity\Services $service
     *
     * @return UserServices
     */
    public function setService(\AppBundle\Entity\Services $service)
    {
        $this->service = $service;

        return $this;
    }

    /**
     * Get service
     *
     * @return \AppBundle\Entity\Services
     */
    public function getService()
    {
        return $this->service;
    }
}

