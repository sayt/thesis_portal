<?php

namespace AppBundle\Entity\Intezmeny;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="targySorrend")
 */
class TargySorrend
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="datetime")
     */
    protected $ervenyessegkezdete;

    /**
     * @ORM\Column(type="datetime")
     */
    protected $ervenyessegvege;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Felhasznalo\User", inversedBy="userTargySorrendmodositoUser")
     * @ORM\JoinColumn(name="modositoUser", referencedColumnName="id")
     */
    protected $modositoUser;

    /**
     * @ORM\ManyToOne(targetEntity="Targy", inversedBy="targyTargySorrendelozo")
     * @ORM\JoinColumn(name="elozotargy", referencedColumnName="id")
     */
    protected $elozotargy;

    /**
     * @ORM\ManyToOne(targetEntity="Targy", inversedBy="targyTargySorrend")
     * @ORM\JoinColumn(name="targy", referencedColumnName="id")
     */
    protected $targy;

    /**
     * @ORM\ManyToOne(targetEntity="Targy", inversedBy="targyTargySorrendkovetkezo")
     * @ORM\JoinColumn(name="kovetkezotargy", referencedColumnName="id")
     */
    protected $kovetkezotargy;

    /**
     * @ORM\ManyToOne(targetEntity="Szak", inversedBy="szakTargySorrend")
     * @ORM\JoinColumn(name="szak", referencedColumnName="id")
     */
    protected $szak;

    /**
     * @ORM\ManyToOne(targetEntity="Kar", inversedBy="karTargySorrend")
     * @ORM\JoinColumn(name="kar", referencedColumnName="id")
     */
    protected $kar;

    /**
     * @ORM\ManyToOne(targetEntity="Szakdolgozat", inversedBy="szakdolgozatTargySorrend")
     * @ORM\JoinColumn(name="szakdolgozat", referencedColumnName="id")
     */
    protected $szakdolgozat;


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
     * Set ervenyessegkezdete
     *
     * @param \DateTime $ervenyessegkezdete
     * @return TargySorrend
     */
    public function setErvenyessegkezdete($ervenyessegkezdete)
    {
        $this->ervenyessegkezdete = $ervenyessegkezdete;

        return $this;
    }

    /**
     * Get ervenyessegkezdete
     *
     * @return \DateTime 
     */
    public function getErvenyessegkezdete()
    {
        return $this->ervenyessegkezdete;
    }

    /**
     * Set ervenyessegvege
     *
     * @param \DateTime $ervenyessegvege
     * @return TargySorrend
     */
    public function setErvenyessegvege($ervenyessegvege)
    {
        $this->ervenyessegvege = $ervenyessegvege;

        return $this;
    }

    /**
     * Get ervenyessegvege
     *
     * @return \DateTime 
     */
    public function getErvenyessegvege()
    {
        return $this->ervenyessegvege;
    }

    /**
     * Set modositoUser
     *
     * @param \AppBundle\Entity\Felhasznalo\User $modositoUser
     * @return TargySorrend
     */
    public function setModositoUser(\AppBundle\Entity\Felhasznalo\User $modositoUser = null)
    {
        $this->modositoUser = $modositoUser;

        return $this;
    }

    /**
     * Get modositoUser
     *
     * @return \AppBundle\Entity\Felhasznalo\User 
     */
    public function getModositoUser()
    {
        return $this->modositoUser;
    }

    /**
     * Set elozotargy
     *
     * @param \AppBundle\Entity\Intezmeny\Targy $elozotargy
     * @return TargySorrend
     */
    public function setElozotargy(\AppBundle\Entity\Intezmeny\Targy $elozotargy = null)
    {
        $this->elozotargy = $elozotargy;

        return $this;
    }

    /**
     * Get elozotargy
     *
     * @return \AppBundle\Entity\Intezmeny\Targy 
     */
    public function getElozotargy()
    {
        return $this->elozotargy;
    }

    /**
     * Set targy
     *
     * @param \AppBundle\Entity\Intezmeny\Targy $targy
     * @return TargySorrend
     */
    public function setTargy(\AppBundle\Entity\Intezmeny\Targy $targy = null)
    {
        $this->targy = $targy;

        return $this;
    }

    /**
     * Get targy
     *
     * @return \AppBundle\Entity\Intezmeny\Targy 
     */
    public function getTargy()
    {
        return $this->targy;
    }

    /**
     * Set kovetkezotargy
     *
     * @param \AppBundle\Entity\Intezmeny\Targy $kovetkezotargy
     * @return TargySorrend
     */
    public function setKovetkezotargy(\AppBundle\Entity\Intezmeny\Targy $kovetkezotargy = null)
    {
        $this->kovetkezotargy = $kovetkezotargy;

        return $this;
    }

    /**
     * Get kovetkezotargy
     *
     * @return \AppBundle\Entity\Intezmeny\Targy 
     */
    public function getKovetkezotargy()
    {
        return $this->kovetkezotargy;
    }

    /**
     * Set szak
     *
     * @param \AppBundle\Entity\Intezmeny\Szak $szak
     * @return TargySorrend
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
     * Set kar
     *
     * @param \AppBundle\Entity\Intezmeny\Kar $kar
     * @return TargySorrend
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
}
