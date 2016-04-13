<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="kar")
 */
class Kar
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
    private $Name;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $intezmenyName;

    /**
     * @ORM\OneToMany(targetEntity="User", mappedBy="kar")
     */
    private $karUser;

    /**
     * @ORM\OneToMany(targetEntity="Intezet", mappedBy="kar")
     */
    private $karIntezet;

    /**
     * @ORM\OneToMany(targetEntity="Role", mappedBy="kar")
     */
    private $karRole;
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->karUser = new \Doctrine\Common\Collections\ArrayCollection();
        $this->karIntezet = new \Doctrine\Common\Collections\ArrayCollection();
        $this->karRole = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set Name
     *
     * @param string $name
     * @return Kar
     */
    public function setName($name)
    {
        $this->Name = $name;

        return $this;
    }

    /**
     * Get Name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * Set intezmenyName
     *
     * @param string $intezmenyName
     * @return Kar
     */
    public function setIntezmenyName($intezmenyName)
    {
        $this->intezmenyName = $intezmenyName;

        return $this;
    }

    /**
     * Get intezmenyName
     *
     * @return string 
     */
    public function getIntezmenyName()
    {
        return $this->intezmenyName;
    }

    /**
     * Add karUser
     *
     * @param \AppBundle\Entity\Intezmeny\User $karUser
     * @return Kar
     */
    public function addKarUser(\AppBundle\Entity\Intezmeny\User $karUser)
    {
        $this->karUser[] = $karUser;

        return $this;
    }

    /**
     * Remove karUser
     *
     * @param \AppBundle\Entity\Intezmeny\User $karUser
     */
    public function removeKarUser(\AppBundle\Entity\Intezmeny\User $karUser)
    {
        $this->karUser->removeElement($karUser);
    }

    /**
     * Get karUser
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getKarUser()
    {
        return $this->karUser;
    }

    /**
     * Add karIntezet
     *
     * @param \AppBundle\Entity\Intezmeny\Intezet $karIntezet
     * @return Kar
     */
    public function addKarIntezet(\AppBundle\Entity\Intezmeny\Intezet $karIntezet)
    {
        $this->karIntezet[] = $karIntezet;

        return $this;
    }

    /**
     * Remove karIntezet
     *
     * @param \AppBundle\Entity\Intezmeny\Intezet $karIntezet
     */
    public function removeKarIntezet(\AppBundle\Entity\Intezmeny\Intezet $karIntezet)
    {
        $this->karIntezet->removeElement($karIntezet);
    }

    /**
     * Get karIntezet
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getKarIntezet()
    {
        return $this->karIntezet;
    }

    /**
     * Add karRole
     *
     * @param \AppBundle\Entity\Intezmeny\Role $karRole
     * @return Kar
     */
    public function addKarRole(\AppBundle\Entity\Intezmeny\Role $karRole)
    {
        $this->karRole[] = $karRole;

        return $this;
    }

    /**
     * Remove karRole
     *
     * @param \AppBundle\Entity\Intezmeny\Role $karRole
     */
    public function removeKarRole(\AppBundle\Entity\Intezmeny\Role $karRole)
    {
        $this->karRole->removeElement($karRole);
    }

    /**
     * Get karRole
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getKarRole()
    {
        return $this->karRole;
    }
}
