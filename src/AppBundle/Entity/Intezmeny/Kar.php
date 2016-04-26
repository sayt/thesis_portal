<?php

namespace AppBundle\Entity\Intezmeny;

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
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Felhasznalo\User", mappedBy="kar")
     */
    private $karUser;

    /**
     * @ORM\OneToMany(targetEntity="Szak", mappedBy="kar")
     */
    private $karSzak;

    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Felhasznalo\Role", mappedBy="kar")
     */
    private $karRole;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->karUser = new \Doctrine\Common\Collections\ArrayCollection();
        $this->karSzak = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Add karUser
     *
     * @param \AppBundle\Entity\Felhasznalo\User $karUser
     * @return Kar
     */
    public function addKarUser(\AppBundle\Entity\Felhasznalo\User $karUser)
    {
        $this->karUser[] = $karUser;

        return $this;
    }

    /**
     * Remove karUser
     *
     * @param \AppBundle\Entity\Felhasznalo\User $karUser
     */
    public function removeKarUser(\AppBundle\Entity\Felhasznalo\User $karUser)
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
     * Add karSzak
     *
     * @param \AppBundle\Entity\Intezmeny\Szak $karSzak
     * @return Kar
     */
    public function addKarSzak(\AppBundle\Entity\Intezmeny\Szak $karSzak)
    {
        $this->karSzak[] = $karSzak;

        return $this;
    }

    /**
     * Remove karSzak
     *
     * @param \AppBundle\Entity\Intezmeny\Szak $karSzak
     */
    public function removeKarSzak(\AppBundle\Entity\Intezmeny\Szak $karSzak)
    {
        $this->karSzak->removeElement($karSzak);
    }

    /**
     * Get karSzak
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getKarSzak()
    {
        return $this->karSzak;
    }

    /**
     * Add karRole
     *
     * @param \AppBundle\Entity\Felhasznalo\Role $karRole
     * @return Kar
     */
    public function addKarRole(\AppBundle\Entity\Felhasznalo\Role $karRole)
    {
        $this->karRole[] = $karRole;

        return $this;
    }

    /**
     * Remove karRole
     *
     * @param \AppBundle\Entity\Felhasznalo\Role $karRole
     */
    public function removeKarRole(\AppBundle\Entity\Felhasznalo\Role $karRole)
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
