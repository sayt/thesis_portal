<?php

namespace AppBundle\Entity\Szakdolgozat;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="file")
 */
class File
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
     * @ORM\Column(type="string", length=1000)
     */
    private $location;

    /**
     * @ORM\Column(type="integer")
     */
    private $fileSzam;

    /**
     * @ORM\Column(type="datetime")
     */
    private $datum;

    /**
     * @ORM\Column(type="boolean")
     */
    private $status;

    /**
     * @ORM\ManyToOne(targetEntity="Szakdolgozat", inversedBy="szakdolgozatFile")
     * @ORM\JoinColumn(name="szakdolgozat", referencedColumnName="id")
     */
    private $szakdolgozat;

    /**
     * @ORM\ManyToOne(targetEntity="Merfoldko", inversedBy="merfoldkoFile")
     * @ORM\JoinColumn(name="merfoldko", referencedColumnName="id")
     */
    private $merfoldko;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Felhasznalo\User", inversedBy="userFile")
     * @ORM\JoinColumn(name="user", referencedColumnName="id")
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
     * Set name
     *
     * @param string $name
     * @return File
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
     * Set location
     *
     * @param string $location
     * @return File
     */
    public function setLocation($location)
    {
        $this->location = $location;

        return $this;
    }

    /**
     * Get location
     *
     * @return string 
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Set fileSzam
     *
     * @param integer $fileSzam
     * @return File
     */
    public function setFileSzam($fileSzam)
    {
        $this->fileSzam = $fileSzam;

        return $this;
    }

    /**
     * Get fileSzam
     *
     * @return integer 
     */
    public function getFileSzam()
    {
        return $this->fileSzam;
    }

    /**
     * Set datum
     *
     * @param \DateTime $datum
     * @return File
     */
    public function setDatum($datum)
    {
        $this->datum = $datum;

        return $this;
    }

    /**
     * Get datum
     *
     * @return \DateTime 
     */
    public function getDatum()
    {
        return $this->datum;
    }

    /**
     * Set status
     *
     * @param boolean $status
     * @return File
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
     * Set szakdolgozat
     *
     * @param \AppBundle\Entity\Szakdolgozat\Szakdolgozat $szakdolgozat
     * @return File
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

    /**
     * Set merfoldko
     *
     * @param \AppBundle\Entity\Szakdolgozat\Merfoldko $merfoldko
     * @return File
     */
    public function setMerfoldko(\AppBundle\Entity\Szakdolgozat\Merfoldko $merfoldko = null)
    {
        $this->merfoldko = $merfoldko;

        return $this;
    }

    /**
     * Get merfoldko
     *
     * @return \AppBundle\Entity\Szakdolgozat\Merfoldko 
     */
    public function getMerfoldko()
    {
        return $this->merfoldko;
    }

    /**
     * Set user
     *
     * @param \AppBundle\Entity\Felhasznalo\User $user
     * @return File
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
}
