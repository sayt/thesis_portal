<?php

namespace AppBundle\Entity\Intezmeny;

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
    protected $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $name;

    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $targykod;

    /**
     * @ORM\Column(type="string", length=10000)
     */
    protected $description;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $status;

    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Felhasznalo\FelhasznaloTargyEletut", mappedBy="targy")
     */
    protected $targyFelhasznaloTargyEletut;

    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Felhasznalo\User", mappedBy="targy")
     */
    protected $targyUser;

    /**
     * @ORM\OneToOne(targetEntity="Szakirany", mappedBy="targy")
     */
    protected $targySzakirany;

    /**
     * @ORM\OneToMany(targetEntity="TargySorrend", mappedBy="targy")
     */
    protected $targyTargySorrend;

    /**
     * @ORM\OneToMany(targetEntity="TargySorrend", mappedBy="elozotargy")
     */
    protected $targyTargySorrendelozo;

    /**
     * @ORM\OneToMany(targetEntity="TargySorrend", mappedBy="kovetkezotargy")
     */
    protected $targyTargySorrendkovetkezo;

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
     * @param \AppBundle\Entity\Felhasznalo\FelhasznaloTargyEletut $targyFelhasznaloTargyEletut
     * @return Targy
     */
    public function addTargyFelhasznaloTargyEletut(\AppBundle\Entity\Felhasznalo\FelhasznaloTargyEletut $targyFelhasznaloTargyEletut)
    {
        $this->targyFelhasznaloTargyEletut[] = $targyFelhasznaloTargyEletut;

        return $this;
    }

    /**
     * Remove targyFelhasznaloTargyEletut
     *
     * @param \AppBundle\Entity\Felhasznalo\FelhasznaloTargyEletut $targyFelhasznaloTargyEletut
     */
    public function removeTargyFelhasznaloTargyEletut(\AppBundle\Entity\Felhasznalo\FelhasznaloTargyEletut $targyFelhasznaloTargyEletut)
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
     * @param \AppBundle\Entity\Felhasznalo\User $targyUser
     * @return Targy
     */
    public function addTargyUser(\AppBundle\Entity\Felhasznalo\User $targyUser)
    {
        $this->targyUser[] = $targyUser;

        return $this;
    }

    /**
     * Remove targyUser
     *
     * @param \AppBundle\Entity\Felhasznalo\User $targyUser
     */
    public function removeTargyUser(\AppBundle\Entity\Felhasznalo\User $targyUser)
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

    /**
     * Set targySzakirany
     *
     * @param \AppBundle\Entity\Intezmeny\Szakirany $targySzakirany
     * @return Targy
     */
    public function setTargySzakirany(\AppBundle\Entity\Intezmeny\Szakirany $targySzakirany = null)
    {
        $this->targySzakirany = $targySzakirany;

        return $this;
    }

    /**
     * Set targykod
     *
     * @param string $targykod
     * @return Targy
     */
    public function setTargykod($targykod)
    {
        $this->targykod = $targykod;

        return $this;
    }

    /**
     * Get targykod
     *
     * @return string 
     */
    public function getTargykod()
    {
        return $this->targykod;
    }

    /**
     * Add targyTargySorrend
     *
     * @param \AppBundle\Entity\Intezmeny\TargySorrend $targyTargySorrend
     * @return Targy
     */
    public function addTargyTargySorrend(\AppBundle\Entity\Intezmeny\TargySorrend $targyTargySorrend)
    {
        $this->targyTargySorrend[] = $targyTargySorrend;

        return $this;
    }

    /**
     * Remove targyTargySorrend
     *
     * @param \AppBundle\Entity\Intezmeny\TargySorrend $targyTargySorrend
     */
    public function removeTargyTargySorrend(\AppBundle\Entity\Intezmeny\TargySorrend $targyTargySorrend)
    {
        $this->targyTargySorrend->removeElement($targyTargySorrend);
    }

    /**
     * Get targyTargySorrend
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTargyTargySorrend()
    {
        return $this->targyTargySorrend;
    }

    /**
     * Add targyTargySorrendelozo
     *
     * @param \AppBundle\Entity\Intezmeny\TargySorrend $targyTargySorrendelozo
     * @return Targy
     */
    public function addTargyTargySorrendelozo(\AppBundle\Entity\Intezmeny\TargySorrend $targyTargySorrendelozo)
    {
        $this->targyTargySorrendelozo[] = $targyTargySorrendelozo;

        return $this;
    }

    /**
     * Remove targyTargySorrendelozo
     *
     * @param \AppBundle\Entity\Intezmeny\TargySorrend $targyTargySorrendelozo
     */
    public function removeTargyTargySorrendelozo(\AppBundle\Entity\Intezmeny\TargySorrend $targyTargySorrendelozo)
    {
        $this->targyTargySorrendelozo->removeElement($targyTargySorrendelozo);
    }

    /**
     * Get targyTargySorrendelozo
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTargyTargySorrendelozo()
    {
        return $this->targyTargySorrendelozo;
    }

    /**
     * Add targyTargySorrendkovetkezo
     *
     * @param \AppBundle\Entity\Intezmeny\TargySorrend $targyTargySorrendkovetkezo
     * @return Targy
     */
    public function addTargyTargySorrendkovetkezo(\AppBundle\Entity\Intezmeny\TargySorrend $targyTargySorrendkovetkezo)
    {
        $this->targyTargySorrendkovetkezo[] = $targyTargySorrendkovetkezo;

        return $this;
    }

    /**
     * Remove targyTargySorrendkovetkezo
     *
     * @param \AppBundle\Entity\Intezmeny\TargySorrend $targyTargySorrendkovetkezo
     */
    public function removeTargyTargySorrendkovetkezo(\AppBundle\Entity\Intezmeny\TargySorrend $targyTargySorrendkovetkezo)
    {
        $this->targyTargySorrendkovetkezo->removeElement($targyTargySorrendkovetkezo);
    }

    /**
     * Get targyTargySorrendkovetkezo
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTargyTargySorrendkovetkezo()
    {
        return $this->targyTargySorrendkovetkezo;
    }
}
