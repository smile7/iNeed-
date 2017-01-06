<?php

namespace AppBundle\Entity;

/**
 * InCertificate
 */
class InCertificate
{
    /**
     * @var string
     */
    private $title;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \AppBundle\Entity\InUser
     */
    private $user;


    /**
     * Set title
     *
     * @param string $title
     *
     * @return InCertificate
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
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
     * @return InCertificate
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

