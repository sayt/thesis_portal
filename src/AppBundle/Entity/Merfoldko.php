<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="merfoldko")
 */
class Merfoldko
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
     * @ORM\Column(type="date")
     */
    private $teljesitesiHatarido;

    /**
     * @ORM\Column(type="boolean")
     */
    private $beadasra;

    /**
     * @ORM\Column(type="boolean")
     */
    private $status;

    /**
     * @ORM\ManyToOne(targetEntity="Szakdolgozat", inversedBy="szakdolgozatMerfoldko")
     * @ORM\JoinColumn(name="szakdolgozat", referencedColumnName="id")
     */
    private $szakdolgozat;

    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="userMerfoldko")
     * @ORM\JoinColumn(name="user", referencedColumnName="id")
     */
    private $user;

    /**
     * @ORM\OneToMany(targetEntity="Megjegyzes", mappedBy="merfoldko")
     */
    private $merfoldkoMegjegyzes;

    /**
     * @ORM\OneToMany(targetEntity="File", mappedBy="merfoldko")
     */
    private $merfoldkoFile;
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->merfoldkoMegjegyzes = new \Doctrine\Common\Collections\ArrayCollection();
        $this->merfoldkoFile = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return Merfoldko
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
     * @return Merfoldko
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
     * Set teljesitesiHatarido
     *
     * @param \DateTime $teljesitesiHatarido
     * @return Merfoldko
     */
    public function setTeljesitesiHatarido($teljesitesiHatarido)
    {
        $this->teljesitesiHatarido = $teljesitesiHatarido;

        return $this;
    }

    /**
     * Get teljesitesiHatarido
     *
     * @return \DateTime 
     */
    public function getTeljesitesiHatarido()
    {
        return $this->teljesitesiHatarido;
    }

    /**
     * Set beadasra
     *
     * @param boolean $beadasra
     * @return Merfoldko
     */
    public function setBeadasra($beadasra)
    {
        $this->beadasra = $beadasra;

        return $this;
    }

    /**
     * Get beadasra
     *
     * @return boolean 
     */
    public function getBeadasra()
    {
        return $this->beadasra;
    }

    /**
     * Set status
     *
     * @param boolean $status
     * @return Merfoldko
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
     * Set szakdolgozat
     *
     * @param \AppBundle\Entity\Szakdolgozat\Szakdolgozat $szakdolgozat
     * @return Merfoldko
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
     * Set user
     *
     * @param \AppBundle\Entity\Szakdolgozat\User $user
     * @return Merfoldko
     */
    public function setUser(\AppBundle\Entity\Szakdolgozat\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \AppBundle\Entity\Szakdolgozat\User 
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Add merfoldkoMegjegyzes
     *
     * @param \AppBundle\Entity\Szakdolgozat\Megjegyzes $merfoldkoMegjegyzes
     * @return Merfoldko
     */
    public function addMerfoldkoMegjegyze(\AppBundle\Entity\Szakdolgozat\Megjegyzes $merfoldkoMegjegyzes)
    {
        $this->merfoldkoMegjegyzes[] = $merfoldkoMegjegyzes;

        return $this;
    }

    /**
     * Remove merfoldkoMegjegyzes
     *
     * @param \AppBundle\Entity\Szakdolgozat\Megjegyzes $merfoldkoMegjegyzes
     */
    public function removeMerfoldkoMegjegyze(\AppBundle\Entity\Szakdolgozat\Megjegyzes $merfoldkoMegjegyzes)
    {
        $this->merfoldkoMegjegyzes->removeElement($merfoldkoMegjegyzes);
    }

    /**
     * Get merfoldkoMegjegyzes
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getMerfoldkoMegjegyzes()
    {
        return $this->merfoldkoMegjegyzes;
    }

    /**
     * Add merfoldkoFile
     *
     * @param \AppBundle\Entity\Szakdolgozat\File $merfoldkoFile
     * @return Merfoldko
     */
    public function addMerfoldkoFile(\AppBundle\Entity\Szakdolgozat\File $merfoldkoFile)
    {
        $this->merfoldkoFile[] = $merfoldkoFile;

        return $this;
    }

    /**
     * Remove merfoldkoFile
     *
     * @param \AppBundle\Entity\Szakdolgozat\File $merfoldkoFile
     */
    public function removeMerfoldkoFile(\AppBundle\Entity\Szakdolgozat\File $merfoldkoFile)
    {
        $this->merfoldkoFile->removeElement($merfoldkoFile);
    }

    /**
     * Get merfoldkoFile
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getMerfoldkoFile()
    {
        return $this->merfoldkoFile;
    }
}
