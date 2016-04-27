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
    protected $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $name;

    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $shortName;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $status;

    /**
     * @ORM\ManyToOne(targetEntity="Kar", inversedBy="karSzak")
     * @ORM\JoinColumn(name="kar", referencedColumnName="id")
     */
    protected $kar;

    /**
     * @ORM\OneToMany(targetEntity="Intezet", mappedBy="szak")
     */
    protected $szakIntezet;

    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Felhasznalo\Role", mappedBy="szak")
     */
    protected $szakRole;

    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Szakdolgozat\Szakdolgozat", mappedBy="szak")
     */
    protected $szakSzakdolgozat;

    /**
     * @ORM\OneToMany(targetEntity="TargySorrend", mappedBy="szak")
     *
     * @var \Doctrine\Common\Collections\Collection $szakTargySorrend
     */
    protected $szakTargySorrend;

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

    /**
     * Set shortName
     *
     * @param string $shortName
     * @return Szak
     */
    public function setShortName($shortName)
    {
        $this->shortName = $shortName;

        return $this;
    }

    /**
     * Get shortName
     *
     * @return string 
     */
    public function getShortName()
    {
        return $this->shortName;
    }

    /**
     * Add szakTargySorrend
     *
     * @param \AppBundle\Entity\Intezmeny\TargySorrend $szakTargySorrend
     * @return Szak
     */
    public function addSzakTargySorrend(\AppBundle\Entity\Intezmeny\TargySorrend $szakTargySorrend)
    {
        $this->szakTargySorrend[] = $szakTargySorrend;

        return $this;
    }

    /**
     * Remove szakTargySorrend
     *
     * @param \AppBundle\Entity\Intezmeny\TargySorrend $szakTargySorrend
     */
    public function removeSzakTargySorrend(\AppBundle\Entity\Intezmeny\TargySorrend $szakTargySorrend)
    {
        $this->szakTargySorrend->removeElement($szakTargySorrend);
    }

    /**
     * Get szakTargySorrend
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSzakTargySorrend()
    {
        return $this->szakTargySorrend;
    }
}
