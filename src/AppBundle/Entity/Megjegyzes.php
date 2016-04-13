<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="megjegyzes")
 */
class Megjegyzes
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $megjegyzesSzam;

    /**
     * @ORM\Column(type="string", length=10000)
     */
    private $description;

    /**
     * @ORM\Column(type="datetime")
     */
    private $datum;

    /**
     * @ORM\Column(type="boolean")
     */
    private $status;

    /**
     * @ORM\ManyToOne(targetEntity="Szakdolgozat", inversedBy="szakdolgozatMegjegyzes")
     * @ORM\JoinColumn(name="szakdolgozat", referencedColumnName="id")
     */
    private $szakdolgozat;

    /**
     * @ORM\ManyToOne(targetEntity="Merfoldko", inversedBy="merfoldkoMegjegyzes")
     * @ORM\JoinColumn(name="merfoldko", referencedColumnName="id")
     */
    private $merfoldko;

    /**
     * @ORM\ManyToOne(targetEntity="Konzultacio", inversedBy="konzultacioMegjegyzes")
     * @ORM\JoinColumn(name="konzultacio", referencedColumnName="id")
     */
    private $konzultacio;

    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="userMegjegyzes")
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
     * Set megjegyzesSzam
     *
     * @param integer $megjegyzesSzam
     * @return Megjegyzes
     */
    public function setMegjegyzesSzam($megjegyzesSzam)
    {
        $this->megjegyzesSzam = $megjegyzesSzam;

        return $this;
    }

    /**
     * Get megjegyzesSzam
     *
     * @return integer 
     */
    public function getMegjegyzesSzam()
    {
        return $this->megjegyzesSzam;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Megjegyzes
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
     * Set datum
     *
     * @param \DateTime $datum
     * @return Megjegyzes
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
     * @return Megjegyzes
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
     * @return Megjegyzes
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
     * @return Megjegyzes
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
     * Set konzultacio
     *
     * @param \AppBundle\Entity\Szakdolgozat\Konzultacio $konzultacio
     * @return Megjegyzes
     */
    public function setKonzultacio(\AppBundle\Entity\Szakdolgozat\Konzultacio $konzultacio = null)
    {
        $this->konzultacio = $konzultacio;

        return $this;
    }

    /**
     * Get konzultacio
     *
     * @return \AppBundle\Entity\Szakdolgozat\Konzultacio 
     */
    public function getKonzultacio()
    {
        return $this->konzultacio;
    }

    /**
     * Set user
     *
     * @param \AppBundle\Entity\Szakdolgozat\User $user
     * @return Megjegyzes
     */
    public function setUser(\AppBundle\Entity\Szakdolgozat\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \AppBundle\Entity\Szakdolgozat\User 
     */
    public function getUser()
    {
        return $this->user;
    }
}
