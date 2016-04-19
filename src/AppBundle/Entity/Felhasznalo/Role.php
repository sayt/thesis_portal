<?php

namespace AppBundle\Entity\Felhasznalo;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="role")
 */
class Role
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
     * @ORM\Column(type="string", length=10000)
     */
    private $description;

    /**
     * @ORM\Column(type="boolean")
     */
    private $status;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Intezmeny\Kar", inversedBy="karRole")
     * @ORM\JoinColumn(name="kar", referencedColumnName="id")
     */
    private $kar;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Intezmeny\Intezet", inversedBy="intezetRole")
     * @ORM\JoinColumn(name="intezet", referencedColumnName="id")
     */
    private $intezet;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Intezmeny\Szak", inversedBy="szakRole")
     * @ORM\JoinColumn(name="szak", referencedColumnName="id")
     */
    private $szak;

    /**
     * @ORM\OneToMany(targetEntity="User", mappedBy="role")
     */
    private $roleUser;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->roleUser = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return Role
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
     * @return Role
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
     * Set status
     *
     * @param boolean $status
     * @return Role
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
     * @return Role
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
     * Set intezet
     *
     * @param \AppBundle\Entity\Intezmeny\Intezet $intezet
     * @return Role
     */
    public function setIntezet(\AppBundle\Entity\Intezmeny\Intezet $intezet = null)
    {
        $this->intezet = $intezet;

        return $this;
    }

    /**
     * Get intezet
     *
     * @return \AppBundle\Entity\Intezmeny\Intezet 
     */
    public function getIntezet()
    {
        return $this->intezet;
    }

    /**
     * Set szak
     *
     * @param \AppBundle\Entity\Intezmeny\Szak $szak
     * @return Role
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
     * Add roleUser
     *
     * @param \AppBundle\Entity\Felhasznalo\User $roleUser
     * @return Role
     */
    public function addRoleUser(\AppBundle\Entity\Felhasznalo\User $roleUser)
    {
        $this->roleUser[] = $roleUser;

        return $this;
    }

    /**
     * Remove roleUser
     *
     * @param \AppBundle\Entity\Felhasznalo\User $roleUser
     */
    public function removeRoleUser(\AppBundle\Entity\Felhasznalo\User $roleUser)
    {
        $this->roleUser->removeElement($roleUser);
    }

    /**
     * Get roleUser
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getRoleUser()
    {
        return $this->roleUser;
    }
}
