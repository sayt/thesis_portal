<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="targy")
 */
class Targy
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
     * @ORM\OneToMany(targetEntity="FelhasznaloTargyEletut", mappedBy="targy")
     */
    private $targyFelhasznaloTargyEletut;

    /**
     * @ORM\OneToMany(targetEntity="User", mappedBy="targy")
     */
    private $targyUser;

    /**
     * @ORM\OneToMany(targetEntity="Szakirany", mappedBy="targy")
     */
    private $targySzakirany;
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->targyFelhasznaloTargyEletut = new \Doctrine\Common\Collections\ArrayCollection();
        $this->targyUser = new \Doctrine\Common\Collections\ArrayCollection();
        $this->targySzakirany = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return Targy
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
     * @return Targy
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
     * @return Targy
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
     * Add targyFelhasznaloTargyEletut
     *
     * @param \AppBundle\Entity\Intezmeny\FelhasznaloTargyEletut $targyFelhasznaloTargyEletut
     * @return Targy
     */
    public function addTargyFelhasznaloTargyEletut(\AppBundle\Entity\Intezmeny\FelhasznaloTargyEletut $targyFelhasznaloTargyEletut)
    {
        $this->targyFelhasznaloTargyEletut[] = $targyFelhasznaloTargyEletut;

        return $this;
    }

    /**
     * Remove targyFelhasznaloTargyEletut
     *
     * @param \AppBundle\Entity\Intezmeny\FelhasznaloTargyEletut $targyFelhasznaloTargyEletut
     */
    public function removeTargyFelhasznaloTargyEletut(\AppBundle\Entity\Intezmeny\FelhasznaloTargyEletut $targyFelhasznaloTargyEletut)
    {
        $this->targyFelhasznaloTargyEletut->removeElement($targyFelhasznaloTargyEletut);
    }

    /**
     * Get targyFelhasznaloTargyEletut
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTargyFelhasznaloTargyEletut()
    {
        return $this->targyFelhasznaloTargyEletut;
    }

    /**
     * Add targyUser
     *
     * @param \AppBundle\Entity\Intezmeny\User $targyUser
     * @return Targy
     */
    public function addTargyUser(\AppBundle\Entity\Intezmeny\User $targyUser)
    {
        $this->targyUser[] = $targyUser;

        return $this;
    }

    /**
     * Remove targyUser
     *
     * @param \AppBundle\Entity\Intezmeny\User $targyUser
     */
    public function removeTargyUser(\AppBundle\Entity\Intezmeny\User $targyUser)
    {
        $this->targyUser->removeElement($targyUser);
    }

    /**
     * Get targyUser
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTargyUser()
    {
        return $this->targyUser;
    }

    /**
     * Add targySzakirany
     *
     * @param \AppBundle\Entity\Intezmeny\Szakirany $targySzakirany
     * @return Targy
     */
    public function addTargySzakirany(\AppBundle\Entity\Intezmeny\Szakirany $targySzakirany)
    {
        $this->targySzakirany[] = $targySzakirany;

        return $this;
    }

    /**
     * Remove targySzakirany
     *
     * @param \AppBundle\Entity\Intezmeny\Szakirany $targySzakirany
     */
    public function removeTargySzakirany(\AppBundle\Entity\Intezmeny\Szakirany $targySzakirany)
    {
        $this->targySzakirany->removeElement($targySzakirany);
    }

    /**
     * Get targySzakirany
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTargySzakirany()
    {
        return $this->targySzakirany;
    }
}
