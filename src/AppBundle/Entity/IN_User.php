<?php

namespace AppBundle\Entity;

use FOS\UserBundle\Model\User as User;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="in_users")
 */

class IN_User extends User
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    public function __construct()
    {
        parent::__construct();
        // your own logic
    }

    /**
     * @var \DateTime
     */
    private $bornYear;

    /**
     * @var string
     */

    /**
     * @ORM\Column(type="string", length=255)
     *
     * @Assert\NotBlank(message="Please enter your name.", groups={"Registration", "Profile"})
     * @Assert\Length(
     *     min=3,
     *     max=255,
     *     minMessage="The name is too short.",
     *     maxMessage="The name is too long.",
     *     groups={"Registration", "Profile"}
     * )
     */

    private $fullName;

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
     * Set bornYear
     *
     * @param \DateTime $bornYear
     *
     * @return IN_User
     */
    public function setBornYear($bornYear)
    {
        $this->bornYear = $bornYear;

        return $this;
    }

    /**
     * Get bornYear
     *
     * @return \DateTime
     */
    public function getBornYear()
    {
        return $this->bornYear;
    }

    /**
     * Set fullName
     *
     * @param string $fullName
     *
     * @return IN_User
     */
    public function setFullName($fullName)
    {
        $this->fullName = $fullName;

        return $this;
    }

    /**
     * Get fullName
     *
     * @return string
     */
    public function getFullName()
    {
        return $this->fullName;
    }
}

