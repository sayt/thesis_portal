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
     * @ORM\ManyToOne(targetEntity="Szak", inversedBy="szakIntezet")
     * @ORM\JoinColumn(name="szak", referencedColumnName="id")
     */
    private $szak;

    /**
     * @ORM\OneToMany(targetEntity="Szakirany", mappedBy="intezet")
     */
    private $intezetSzakirany;

    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Felhasznalo\Role", mappedBy="intezet")
     */
    private $intezetRole;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->intezetSzakirany = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set szak
     *
     * @param \AppBundle\Entity\Intezmeny\Szak $szak
     * @return Intezet
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
     * Add intezetSzakirany
     *
     * @param \AppBundle\Entity\Intezmeny\Szakirany $intezetSzakirany
     * @return Intezet
     */
    public function addIntezetSzakirany(\AppBundle\Entity\Intezmeny\Szakirany $intezetSzakirany)
    {
        $this->intezetSzakirany[] = $intezetSzakirany;

        return $this;
    }

    /**
     * Remove intezetSzakirany
     *
     * @param \AppBundle\Entity\Intezmeny\Szakirany $intezetSzakirany
     */
    public function removeIntezetSzakirany(\AppBundle\Entity\Intezmeny\Szakirany $intezetSzakirany)
    {
        $this->intezetSzakirany->removeElement($intezetSzakirany);
    }

    /**
     * Get intezetSzakirany
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getIntezetSzakirany()
    {
        return $this->intezetSzakirany;
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
