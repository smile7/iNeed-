<?php

namespace AppBundle\Entity;

/**
 * InEducation
 */
class InEducation
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \AppBundle\Entity\InUser
     */
    private $user;


    /**
     * Set name
     *
     * @param string $name
     *
     * @return InEducation
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
     * @return InEducation
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

