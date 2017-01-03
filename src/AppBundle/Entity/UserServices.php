<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserServices
 *
 * @ORM\Table(name="user_services", indexes={@ORM\Index(name="FK_user_services_service_id", columns={"service_id"})})
 * @ORM\Entity
 */
class UserServices
{
    /**
     * @var integer
     *
     * @ORM\Column(name="price", type="integer", nullable=true)
     */
    private $price;

    /**
     * @var integer
     *
     * @ORM\Column(name="user_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $userId;

    /**
     * @var \AppBundle\Entity\Services
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Services")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="service_id", referencedColumnName="service_id")
     * })
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
