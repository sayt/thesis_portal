<?php

namespace AppBundle\Entity\Szakdolgozat;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="konzultacio")
 */
class Konzultacio
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
    private $datumModositas;

    /**
     * @ORM\Column(type="datetime")
     */
    private $veglegesDatum;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $allapot;

    /**
     * @ORM\Column(type="boolean")
     */
    private $status;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Felhasznalo\User", inversedBy="userKonzultacio")
     * @ORM\JoinColumn(name="user", referencedColumnName="id")
     */
    private $user;

    /**
     * @ORM\ManyToOne(targetEntity="Szakdolgozat", inversedBy="szakdolgozatKonzultacio")
     * @ORM\JoinColumn(name="szakdolgozat", referencedColumnName="id")
     */
    private $szakdolgozat;

    /**
     * @ORM\OneToMany(targetEntity="Megjegyzes", mappedBy="konzultacio")
     */
    private $konzultacioMegjegyzes;

    /**
     * @ORM\OneToMany(targetEntity="KonzultacioFelhasznalo", mappedBy="konzultacio")
     */
    private $konzultacioKonzultacioFelhasznalo;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->konzultacioMegjegyzes = new \Doctrine\Common\Collections\ArrayCollection();
        $this->konzultacioKonzultacioFelhasznalo = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return Konzultacio
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
     * @return Konzultacio
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
     * Set datumModositas
     *
     * @param boolean $datumModositas
     * @return Konzultacio
     */
    public function setDatumModositas($datumModositas)
    {
        $this->datumModositas = $datumModositas;

        return $this;
    }

    /**
     * Get datumModositas
     *
     * @return boolean 
     */
    public function getDatumModositas()
    {
        return $this->datumModositas;
    }

    /**
     * Set veglegesDatum
     *
     * @param \DateTime $veglegesDatum
     * @return Konzultacio
     */
    public function setVeglegesDatum($veglegesDatum)
    {
        $this->veglegesDatum = $veglegesDatum;

        return $this;
    }

    /**
     * Get veglegesDatum
     *
     * @return \DateTime 
     */
    public function getVeglegesDatum()
    {
        return $this->veglegesDatum;
    }

    /**
     * Set allapot
     *
     * @param string $allapot
     * @return Konzultacio
     */
    public function setAllapot($allapot)
    {
        $this->allapot = $allapot;

        return $this;
    }

    /**
     * Get allapot
     *
     * @return string 
     */
    public function getAllapot()
    {
        return $this->allapot;
    }

    /**
     * Set status
     *
     * @param boolean $status
     * @return Konzultacio
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
     * Set user
     *
     * @param \AppBundle\Entity\Felhasznalo\User $user
     * @return Konzultacio
     */
    public function setUser(\AppBundle\Entity\Felhasznalo\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \AppBundle\Entity\Felhasznalo\User 
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set szakdolgozat
     *
     * @param \AppBundle\Entity\Szakdolgozat\Szakdolgozat $szakdolgozat
     * @return Konzultacio
     */
    public function setSzakdolgozat(\AppBundle\Entity\Szakdolgozat\Szakdolgozat $szakdolgozat = null)
    {
        $this->szakdolgozat = $szakdolgozat;

        return $this;
    }

    /**
     * Get szakdolgozat
     *
     * @return \AppBundle\Entity\Szakdolgozat\Szakdolgozat 
     */
    public function getSzakdolgozat()
    {
        return $this->szakdolgozat;
    }

    /**
     * Add konzultacioMegjegyzes
     *
     * @param \AppBundle\Entity\Szakdolgozat\Megjegyzes $konzultacioMegjegyzes
     * @return Konzultacio
     */
    public function addKonzultacioMegjegyze(\AppBundle\Entity\Szakdolgozat\Megjegyzes $konzultacioMegjegyzes)
    {
        $this->konzultacioMegjegyzes[] = $konzultacioMegjegyzes;

        return $this;
    }

    /**
     * Remove konzultacioMegjegyzes
     *
     * @param \AppBundle\Entity\Szakdolgozat\Megjegyzes $konzultacioMegjegyzes
     */
    public function removeKonzultacioMegjegyze(\AppBundle\Entity\Szakdolgozat\Megjegyzes $konzultacioMegjegyzes)
    {
        $this->konzultacioMegjegyzes->removeElement($konzultacioMegjegyzes);
    }

    /**
     * Get konzultacioMegjegyzes
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getKonzultacioMegjegyzes()
    {
        return $this->konzultacioMegjegyzes;
    }

    /**
     * Add konzultacioKonzultacioFelhasznalo
     *
     * @param \AppBundle\Entity\Szakdolgozat\KonzultacioFelhasznalo $konzultacioKonzultacioFelhasznalo
     * @return Konzultacio
     */
    public function addKonzultacioKonzultacioFelhasznalo(\AppBundle\Entity\Szakdolgozat\KonzultacioFelhasznalo $konzultacioKonzultacioFelhasznalo)
    {
        $this->konzultacioKonzultacioFelhasznalo[] = $konzultacioKonzultacioFelhasznalo;

        return $this;
    }

    /**
     * Remove konzultacioKonzultacioFelhasznalo
     *
     * @param \AppBundle\Entity\Szakdolgozat\KonzultacioFelhasznalo $konzultacioKonzultacioFelhasznalo
     */
    public function removeKonzultacioKonzultacioFelhasznalo(\AppBundle\Entity\Szakdolgozat\KonzultacioFelhasznalo $konzultacioKonzultacioFelhasznalo)
    {
        $this->konzultacioKonzultacioFelhasznalo->removeElement($konzultacioKonzultacioFelhasznalo);
    }

    /**
     * Get konzultacioKonzultacioFelhasznalo
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getKonzultacioKonzultacioFelhasznalo()
    {
        return $this->konzultacioKonzultacioFelhasznalo;
    }
}
