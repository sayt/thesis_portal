<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="szakdolgozat")
 */
class Szakdolgozat
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
    private $hunName;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $engName;

    /**
     * @ORM\Column(type="int")
     */
    private $hallgatoSzam;

    /**
     * @ORM\Column(type="string", length=10000)
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $kiirasEve;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $language;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $allapot;

    /**
     * @ORM\Column(type="date")
     */
    private $beadasHatarido;

    /**
     * @ORM\Column(type="string", length=10000)
     */
    private $feladat;

    /**
     * @ORM\Column(type="string", length=10000)
     */
    private $tartalmazniaKell;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $vegeredmeny;

    /**
     * @ORM\Column(type="boolean")
     */
    private $titkos;

    /**
     * @ORM\Column(type="boolean")
     */
    private $status;

    /**
     * @ORM\ManyToOne(targetEntity="Szak", inversedBy="szakSzakdolgozat")
     * @ORM\JoinColumn(name="szak", referencedColumnName="id")
     */
    private $szak;

    /**
     * @ORM\OneToMany(targetEntity="SzakdolgozatFelhasznaloKapcsolat", mappedBy="szakdolgozat")
     */
    private $szakdolgozatSzakdolgozatFelhasznaloKapcsolat;

    /**
     * @ORM\OneToMany(targetEntity="Konzultacio", mappedBy="szakdolgozat")
     */
    private $szakdolgozatKonzultacio;

    /**
     * @ORM\OneToMany(targetEntity="Levelkuldo", mappedBy="szakdolgozat")
     */
    private $szakdolgozatLevelkuldo;

    /**
     * @ORM\OneToMany(targetEntity="Merfoldko", mappedBy="szakdolgozat")
     */
    private $szakdolgozatMerfoldko;

    /**
     * @ORM\OneToMany(targetEntity="Megjegyzes", mappedBy="szakdolgozat")
     */
    private $szakdolgozatMegjegyzes;

    /**
     * @ORM\OneToMany(targetEntity="File", mappedBy="szakdolgozat")
     */
    private $szakdolgozatFile;

    /**
     * @ORM\OneToMany(targetEntity="BizottsagSzakdolgozat", mappedBy="szakdolgozat")
     */
    private $szakdolgozaBizottsagSzakdolgozat;
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->szakdolgozatSzakdolgozatFelhasznaloKapcsolat = new \Doctrine\Common\Collections\ArrayCollection();
        $this->szakdolgozatKonzultacio = new \Doctrine\Common\Collections\ArrayCollection();
        $this->szakdolgozatLevelkuldo = new \Doctrine\Common\Collections\ArrayCollection();
        $this->szakdolgozatMerfoldko = new \Doctrine\Common\Collections\ArrayCollection();
        $this->szakdolgozatMegjegyzes = new \Doctrine\Common\Collections\ArrayCollection();
        $this->szakdolgozatFile = new \Doctrine\Common\Collections\ArrayCollection();
        $this->szakdolgozaBizottsagSzakdolgozat = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set hunName
     *
     * @param string $hunName
     * @return Szakdolgozat
     */
    public function setHunName($hunName)
    {
        $this->hunName = $hunName;

        return $this;
    }

    /**
     * Get hunName
     *
     * @return string 
     */
    public function getHunName()
    {
        return $this->hunName;
    }

    /**
     * Set engName
     *
     * @param string $engName
     * @return Szakdolgozat
     */
    public function setEngName($engName)
    {
        $this->engName = $engName;

        return $this;
    }

    /**
     * Get engName
     *
     * @return string 
     */
    public function getEngName()
    {
        return $this->engName;
    }

    /**
     * Set hallgatoSzam
     *
     * @param \int $hallgatoSzam
     * @return Szakdolgozat
     */
    public function setHallgatoSzam($hallgatoSzam)
    {
        $this->hallgatoSzam = $hallgatoSzam;

        return $this;
    }

    /**
     * Get hallgatoSzam
     *
     * @return \int 
     */
    public function getHallgatoSzam()
    {
        return $this->hallgatoSzam;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Szakdolgozat
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
     * Set kiirasEve
     *
     * @param string $kiirasEve
     * @return Szakdolgozat
     */
    public function setKiirasEve($kiirasEve)
    {
        $this->kiirasEve = $kiirasEve;

        return $this;
    }

    /**
     * Get kiirasEve
     *
     * @return string 
     */
    public function getKiirasEve()
    {
        return $this->kiirasEve;
    }

    /**
     * Set language
     *
     * @param string $language
     * @return Szakdolgozat
     */
    public function setLanguage($language)
    {
        $this->language = $language;

        return $this;
    }

    /**
     * Get language
     *
     * @return string 
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Set allapot
     *
     * @param string $allapot
     * @return Szakdolgozat
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
     * Set beadasHatarido
     *
     * @param \DateTime $beadasHatarido
     * @return Szakdolgozat
     */
    public function setBeadasHatarido($beadasHatarido)
    {
        $this->beadasHatarido = $beadasHatarido;

        return $this;
    }

    /**
     * Get beadasHatarido
     *
     * @return \DateTime 
     */
    public function getBeadasHatarido()
    {
        return $this->beadasHatarido;
    }

    /**
     * Set feladat
     *
     * @param string $feladat
     * @return Szakdolgozat
     */
    public function setFeladat($feladat)
    {
        $this->feladat = $feladat;

        return $this;
    }

    /**
     * Get feladat
     *
     * @return string 
     */
    public function getFeladat()
    {
        return $this->feladat;
    }

    /**
     * Set tartalmazniaKell
     *
     * @param string $tartalmazniaKell
     * @return Szakdolgozat
     */
    public function setTartalmazniaKell($tartalmazniaKell)
    {
        $this->tartalmazniaKell = $tartalmazniaKell;

        return $this;
    }

    /**
     * Get tartalmazniaKell
     *
     * @return string 
     */
    public function getTartalmazniaKell()
    {
        return $this->tartalmazniaKell;
    }

    /**
     * Set vegeredmeny
     *
     * @param string $vegeredmeny
     * @return Szakdolgozat
     */
    public function setVegeredmeny($vegeredmeny)
    {
        $this->vegeredmeny = $vegeredmeny;

        return $this;
    }

    /**
     * Get vegeredmeny
     *
     * @return string 
     */
    public function getVegeredmeny()
    {
        return $this->vegeredmeny;
    }

    /**
     * Set titkos
     *
     * @param boolean $titkos
     * @return Szakdolgozat
     */
    public function setTitkos($titkos)
    {
        $this->titkos = $titkos;

        return $this;
    }

    /**
     * Get titkos
     *
     * @return boolean 
     */
    public function getTitkos()
    {
        return $this->titkos;
    }

    /**
     * Set status
     *
     * @param boolean $status
     * @return Szakdolgozat
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
     * @param \AppBundle\Entity\Szakdolgozat\Szak $szak
     * @return Szakdolgozat
     */
    public function setSzak(\AppBundle\Entity\Szakdolgozat\Szak $szak = null)
    {
        $this->szak = $szak;

        return $this;
    }

    /**
     * Get szak
     *
     * @return \AppBundle\Entity\Szakdolgozat\Szak 
     */
    public function getSzak()
    {
        return $this->szak;
    }

    /**
     * Add szakdolgozatSzakdolgozatFelhasznaloKapcsolat
     *
     * @param \AppBundle\Entity\Szakdolgozat\SzakdolgozatFelhasznaloKapcsolat $szakdolgozatSzakdolgozatFelhasznaloKapcsolat
     * @return Szakdolgozat
     */
    public function addSzakdolgozatSzakdolgozatFelhasznaloKapcsolat(\AppBundle\Entity\Szakdolgozat\SzakdolgozatFelhasznaloKapcsolat $szakdolgozatSzakdolgozatFelhasznaloKapcsolat)
    {
        $this->szakdolgozatSzakdolgozatFelhasznaloKapcsolat[] = $szakdolgozatSzakdolgozatFelhasznaloKapcsolat;

        return $this;
    }

    /**
     * Remove szakdolgozatSzakdolgozatFelhasznaloKapcsolat
     *
     * @param \AppBundle\Entity\Szakdolgozat\SzakdolgozatFelhasznaloKapcsolat $szakdolgozatSzakdolgozatFelhasznaloKapcsolat
     */
    public function removeSzakdolgozatSzakdolgozatFelhasznaloKapcsolat(\AppBundle\Entity\Szakdolgozat\SzakdolgozatFelhasznaloKapcsolat $szakdolgozatSzakdolgozatFelhasznaloKapcsolat)
    {
        $this->szakdolgozatSzakdolgozatFelhasznaloKapcsolat->removeElement($szakdolgozatSzakdolgozatFelhasznaloKapcsolat);
    }

    /**
     * Get szakdolgozatSzakdolgozatFelhasznaloKapcsolat
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSzakdolgozatSzakdolgozatFelhasznaloKapcsolat()
    {
        return $this->szakdolgozatSzakdolgozatFelhasznaloKapcsolat;
    }

    /**
     * Add szakdolgozatKonzultacio
     *
     * @param \AppBundle\Entity\Szakdolgozat\Konzultacio $szakdolgozatKonzultacio
     * @return Szakdolgozat
     */
    public function addSzakdolgozatKonzultacio(\AppBundle\Entity\Szakdolgozat\Konzultacio $szakdolgozatKonzultacio)
    {
        $this->szakdolgozatKonzultacio[] = $szakdolgozatKonzultacio;

        return $this;
    }

    /**
     * Remove szakdolgozatKonzultacio
     *
     * @param \AppBundle\Entity\Szakdolgozat\Konzultacio $szakdolgozatKonzultacio
     */
    public function removeSzakdolgozatKonzultacio(\AppBundle\Entity\Szakdolgozat\Konzultacio $szakdolgozatKonzultacio)
    {
        $this->szakdolgozatKonzultacio->removeElement($szakdolgozatKonzultacio);
    }

    /**
     * Get szakdolgozatKonzultacio
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSzakdolgozatKonzultacio()
    {
        return $this->szakdolgozatKonzultacio;
    }

    /**
     * Add szakdolgozatLevelkuldo
     *
     * @param \AppBundle\Entity\Szakdolgozat\Levelkuldo $szakdolgozatLevelkuldo
     * @return Szakdolgozat
     */
    public function addSzakdolgozatLevelkuldo(\AppBundle\Entity\Szakdolgozat\Levelkuldo $szakdolgozatLevelkuldo)
    {
        $this->szakdolgozatLevelkuldo[] = $szakdolgozatLevelkuldo;

        return $this;
    }

    /**
     * Remove szakdolgozatLevelkuldo
     *
     * @param \AppBundle\Entity\Szakdolgozat\Levelkuldo $szakdolgozatLevelkuldo
     */
    public function removeSzakdolgozatLevelkuldo(\AppBundle\Entity\Szakdolgozat\Levelkuldo $szakdolgozatLevelkuldo)
    {
        $this->szakdolgozatLevelkuldo->removeElement($szakdolgozatLevelkuldo);
    }

    /**
     * Get szakdolgozatLevelkuldo
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSzakdolgozatLevelkuldo()
    {
        return $this->szakdolgozatLevelkuldo;
    }

    /**
     * Add szakdolgozatMerfoldko
     *
     * @param \AppBundle\Entity\Szakdolgozat\Merfoldko $szakdolgozatMerfoldko
     * @return Szakdolgozat
     */
    public function addSzakdolgozatMerfoldko(\AppBundle\Entity\Szakdolgozat\Merfoldko $szakdolgozatMerfoldko)
    {
        $this->szakdolgozatMerfoldko[] = $szakdolgozatMerfoldko;

        return $this;
    }

    /**
     * Remove szakdolgozatMerfoldko
     *
     * @param \AppBundle\Entity\Szakdolgozat\Merfoldko $szakdolgozatMerfoldko
     */
    public function removeSzakdolgozatMerfoldko(\AppBundle\Entity\Szakdolgozat\Merfoldko $szakdolgozatMerfoldko)
    {
        $this->szakdolgozatMerfoldko->removeElement($szakdolgozatMerfoldko);
    }

    /**
     * Get szakdolgozatMerfoldko
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSzakdolgozatMerfoldko()
    {
        return $this->szakdolgozatMerfoldko;
    }

    /**
     * Add szakdolgozatMegjegyzes
     *
     * @param \AppBundle\Entity\Szakdolgozat\Megjegyzes $szakdolgozatMegjegyzes
     * @return Szakdolgozat
     */
    public function addSzakdolgozatMegjegyze(\AppBundle\Entity\Szakdolgozat\Megjegyzes $szakdolgozatMegjegyzes)
    {
        $this->szakdolgozatMegjegyzes[] = $szakdolgozatMegjegyzes;

        return $this;
    }

    /**
     * Remove szakdolgozatMegjegyzes
     *
     * @param \AppBundle\Entity\Szakdolgozat\Megjegyzes $szakdolgozatMegjegyzes
     */
    public function removeSzakdolgozatMegjegyze(\AppBundle\Entity\Szakdolgozat\Megjegyzes $szakdolgozatMegjegyzes)
    {
        $this->szakdolgozatMegjegyzes->removeElement($szakdolgozatMegjegyzes);
    }

    /**
     * Get szakdolgozatMegjegyzes
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSzakdolgozatMegjegyzes()
    {
        return $this->szakdolgozatMegjegyzes;
    }

    /**
     * Add szakdolgozatFile
     *
     * @param \AppBundle\Entity\Szakdolgozat\File $szakdolgozatFile
     * @return Szakdolgozat
     */
    public function addSzakdolgozatFile(\AppBundle\Entity\Szakdolgozat\File $szakdolgozatFile)
    {
        $this->szakdolgozatFile[] = $szakdolgozatFile;

        return $this;
    }

    /**
     * Remove szakdolgozatFile
     *
     * @param \AppBundle\Entity\Szakdolgozat\File $szakdolgozatFile
     */
    public function removeSzakdolgozatFile(\AppBundle\Entity\Szakdolgozat\File $szakdolgozatFile)
    {
        $this->szakdolgozatFile->removeElement($szakdolgozatFile);
    }

    /**
     * Get szakdolgozatFile
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSzakdolgozatFile()
    {
        return $this->szakdolgozatFile;
    }

    /**
     * Add szakdolgozaBizottsagSzakdolgozat
     *
     * @param \AppBundle\Entity\Szakdolgozat\BizottsagSzakdolgozat $szakdolgozaBizottsagSzakdolgozat
     * @return Szakdolgozat
     */
    public function addSzakdolgozaBizottsagSzakdolgozat(\AppBundle\Entity\Szakdolgozat\BizottsagSzakdolgozat $szakdolgozaBizottsagSzakdolgozat)
    {
        $this->szakdolgozaBizottsagSzakdolgozat[] = $szakdolgozaBizottsagSzakdolgozat;

        return $this;
    }

    /**
     * Remove szakdolgozaBizottsagSzakdolgozat
     *
     * @param \AppBundle\Entity\Szakdolgozat\BizottsagSzakdolgozat $szakdolgozaBizottsagSzakdolgozat
     */
    public function removeSzakdolgozaBizottsagSzakdolgozat(\AppBundle\Entity\Szakdolgozat\BizottsagSzakdolgozat $szakdolgozaBizottsagSzakdolgozat)
    {
        $this->szakdolgozaBizottsagSzakdolgozat->removeElement($szakdolgozaBizottsagSzakdolgozat);
    }

    /**
     * Get szakdolgozaBizottsagSzakdolgozat
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSzakdolgozaBizottsagSzakdolgozat()
    {
        return $this->szakdolgozaBizottsagSzakdolgozat;
    }
}
