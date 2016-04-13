<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="szakirany")
 */
class Szakirany
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $name;

    /**
     * @ORM\Column(type="boolean")
     */
    private $status;

    /**
     * @ORM\ManyToOne(targetEntity="Szak", inversedBy="szakSzakirany")
     * @ORM\JoinColumn(name="szak", referencedColumnName="id")
     */
    private $szak;

    /**
     * @ORM\OneToOne(targetEntity="User", inversedBy="userSzakirany")
     * @ORM\JoinColumn(name="user", referencedColumnName="id")
     */
    private $user;

    /**
     * @ORM\OneToOne(targetEntity="Targy", inversedBy="targySzakirany")
     * @ORM\JoinColumn(name="targy", referencedColumnName="id")
     */
    private $targy;

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
     * Set name
     *
     * @param string $name
     * @return Szakirany
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
     * Set status
     *
     * @param boolean $status
     * @return Szakirany
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return boolean 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set szak
     *
     * @param \AppBundle\Entity\Intezmeny\Szak $szak
     * @return Szakirany
     */
    public function setSzak(\AppBundle\Entity\Intezmeny\Szak $szak = null)
    {
        $this->szak = $szak;

        return $this;
    }

    /**
     * Get szak
     *
     * @return \AppBundle\Entity\Intezmeny\Szak 
     */
    public function getSzak()
    {
        return $this->szak;
    }

    /**
     * Set user
     *
     * @param \AppBundle\Entity\Intezmeny\User $user
     * @return Szakirany
     */
    public function setUser(\AppBundle\Entity\Intezmeny\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \AppBundle\Entity\Intezmeny\User 
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set targy
     *
     * @param \AppBundle\Entity\Intezmeny\Targy $targy
     * @return Szakirany
     */
    public function setTargy(\AppBundle\Entity\Intezmeny\Targy $targy = null)
    {
        $this->targy = $targy;

        return $this;
    }

    /**
     * Get targy
     *
     * @return \AppBundle\Entity\Intezmeny\Targy 
     */
    public function getTargy()
    {
        return $this->targy;
    }
}
