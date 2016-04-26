<?php

namespace AppBundle\Entity\Intezmeny;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="szak")
 */
class Szak
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
     * @ORM\ManyToOne(targetEntity="Kar", inversedBy="karSzak")
     * @ORM\JoinColumn(name="kar", referencedColumnName="id")
     */
    private $kar;

    /**
     * @ORM\OneToMany(targetEntity="Intezet", mappedBy="szak")
     */
    private $szakIntezet;

    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Felhasznalo\Role", mappedBy="szak")
     */
    private $szakRole;

    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Szakdolgozat\Szakdolgozat", mappedBy="szak")
     */
    private $szakSzakdolgozat;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->szakIntezet = new \Doctrine\Common\Collections\ArrayCollection();
        $this->szakRole = new \Doctrine\Common\Collections\ArrayCollection();
        $this->szakSzakdolgozat = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set name
     *
     * @param string $name
     * @return Szak
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
     * @return Szak
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
     * Set kar
     *
     * @param \AppBundle\Entity\Intezmeny\Kar $kar
     * @return Szak
     */
    public function setKar(\AppBundle\Entity\Intezmeny\Kar $kar = null)
    {
        $this->kar = $kar;

        return $this;
    }

    /**
     * Get kar
     *
     * @return \AppBundle\Entity\Intezmeny\Kar 
     */
    public function getKar()
    {
        return $this->kar;
    }

    /**
     * Add szakIntezet
     *
     * @param \AppBundle\Entity\Intezmeny\Intezet $szakIntezet
     * @return Szak
     */
    public function addSzakIntezet(\AppBundle\Entity\Intezmeny\Intezet $szakIntezet)
    {
        $this->szakIntezet[] = $szakIntezet;

        return $this;
    }

    /**
     * Remove szakIntezet
     *
     * @param \AppBundle\Entity\Intezmeny\Intezet $szakIntezet
     */
    public function removeSzakIntezet(\AppBundle\Entity\Intezmeny\Intezet $szakIntezet)
    {
        $this->szakIntezet->removeElement($szakIntezet);
    }

    /**
     * Get szakIntezet
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSzakIntezet()
    {
        return $this->szakIntezet;
    }

    /**
     * Add szakRole
     *
     * @param \AppBundle\Entity\Felhasznalo\Role $szakRole
     * @return Szak
     */
    public function addSzakRole(\AppBundle\Entity\Felhasznalo\Role $szakRole)
    {
        $this->szakRole[] = $szakRole;

        return $this;
    }

    /**
     * Remove szakRole
     *
     * @param \AppBundle\Entity\Felhasznalo\Role $szakRole
     */
    public function removeSzakRole(\AppBundle\Entity\Felhasznalo\Role $szakRole)
    {
        $this->szakRole->removeElement($szakRole);
    }

    /**
     * Get szakRole
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSzakRole()
    {
        return $this->szakRole;
    }

    /**
     * Add szakSzakdolgozat
     *
     * @param \AppBundle\Entity\Szakdolgozat\Szakdolgozat $szakSzakdolgozat
     * @return Szak
     */
    public function addSzakSzakdolgozat(\AppBundle\Entity\Szakdolgozat\Szakdolgozat $szakSzakdolgozat)
    {
        $this->szakSzakdolgozat[] = $szakSzakdolgozat;

        return $this;
    }

    /**
     * Remove szakSzakdolgozat
     *
     * @param \AppBundle\Entity\Szakdolgozat\Szakdolgozat $szakSzakdolgozat
     */
    public function removeSzakSzakdolgozat(\AppBundle\Entity\Szakdolgozat\Szakdolgozat $szakSzakdolgozat)
    {
        $this->szakSzakdolgozat->removeElement($szakSzakdolgozat);
    }

    /**
     * Get szakSzakdolgozat
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSzakSzakdolgozat()
    {
        return $this->szakSzakdolgozat;
    }
}
