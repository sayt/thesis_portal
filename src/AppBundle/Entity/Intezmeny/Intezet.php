<?php

namespace AppBundle\Entity\Intezmeny;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="intezet")
 */
class Intezet
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
     * @ORM\ManyToOne(targetEntity="Kar", inversedBy="karIntezet")
     * @ORM\JoinColumn(name="kar", referencedColumnName="id")
     */
    private $kar;

    /**
     * @ORM\OneToMany(targetEntity="Szak", mappedBy="intezet")
     */
    private $intezetSzak;

    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Felhasznalo\Role", mappedBy="intezet")
     */
    private $intezetRole;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->intezetSzak = new \Doctrine\Common\Collections\ArrayCollection();
        $this->intezetRole = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return Intezet
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
     * @return Intezet
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
     * @return Intezet
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
     * Add intezetSzak
     *
     * @param \AppBundle\Entity\Intezmeny\Szak $intezetSzak
     * @return Intezet
     */
    public function addIntezetSzak(\AppBundle\Entity\Intezmeny\Szak $intezetSzak)
    {
        $this->intezetSzak[] = $intezetSzak;

        return $this;
    }

    /**
     * Remove intezetSzak
     *
     * @param \AppBundle\Entity\Intezmeny\Szak $intezetSzak
     */
    public function removeIntezetSzak(\AppBundle\Entity\Intezmeny\Szak $intezetSzak)
    {
        $this->intezetSzak->removeElement($intezetSzak);
    }

    /**
     * Get intezetSzak
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getIntezetSzak()
    {
        return $this->intezetSzak;
    }

    /**
     * Add intezetRole
     *
     * @param \AppBundle\Entity\Felhasznalo\Role $intezetRole
     * @return Intezet
     */
    public function addIntezetRole(\AppBundle\Entity\Felhasznalo\Role $intezetRole)
    {
        $this->intezetRole[] = $intezetRole;

        return $this;
    }

    /**
     * Remove intezetRole
     *
     * @param \AppBundle\Entity\Felhasznalo\Role $intezetRole
     */
    public function removeIntezetRole(\AppBundle\Entity\Felhasznalo\Role $intezetRole)
    {
        $this->intezetRole->removeElement($intezetRole);
    }

    /**
     * Get intezetRole
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getIntezetRole()
    {
        return $this->intezetRole;
    }
}
