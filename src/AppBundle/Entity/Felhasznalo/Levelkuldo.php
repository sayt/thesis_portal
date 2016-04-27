<?php

namespace AppBundle\Entity\Felhasznalo;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="levelkuldo")
 */
class Levelkuldo
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $name;

    /**
     * @ORM\Column(type="string", length=10000)
     */
    protected $description;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $allapot;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $status;

    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="userLevelkuldo")
     * @ORM\JoinColumn(name="user", referencedColumnName="id")
     */
    protected $user;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Szakdolgozat\Szakdolgozat", inversedBy="szakdolgozatLevelkuldo")
     * @ORM\JoinColumn(name="szakdolgozat", referencedColumnName="id")
     */
    protected $szakdolgozat;


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
     * @return Levelkuldo
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
     * Set description
     *
     * @param string $description
     * @return Levelkuldo
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set allapot
     *
     * @param boolean $allapot
     * @return Levelkuldo
     */
    public function setAllapot($allapot)
    {
        $this->allapot = $allapot;

        return $this;
    }

    /**
     * Get allapot
     *
     * @return boolean 
     */
    public function getAllapot()
    {
        return $this->allapot;
    }

    /**
     * Set status
     *
     * @param boolean $status
     * @return Levelkuldo
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
     * Set user
     *
     * @param \AppBundle\Entity\Felhasznalo\User $user
     * @return Levelkuldo
     */
    public function setUser(\AppBundle\Entity\Felhasznalo\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \AppBundle\Entity\Felhasznalo\User 
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set szakdolgozat
     *
     * @param \AppBundle\Entity\Szakdolgozat\Szakdolgozat $szakdolgozat
     * @return Levelkuldo
     */
    public function setSzakdolgozat(\AppBundle\Entity\Szakdolgozat\Szakdolgozat $szakdolgozat = null)
    {
        $this->szakdolgozat = $szakdolgozat;

        return $this;
    }

    /**
     * Get szakdolgozat
     *
     * @return \AppBundle\Entity\Szakdolgozat\Szakdolgozat 
     */
    public function getSzakdolgozat()
    {
        return $this->szakdolgozat;
    }
}
