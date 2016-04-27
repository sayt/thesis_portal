<?php

namespace AppBundle\Entity\Bizottsag;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="bizottsagSzakdolgozat")
 */
class BizottsagSzakdolgozat
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="integer")
     */
    protected $irasbeliEredmeny;

    /**
     * @ORM\Column(type="integer")
     */
    protected $szobeliEredmeny;

    /**
     * @ORM\Column(type="string", length=10000)
     */
    protected $description;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $teljesitett;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $status;

    /**
     * @ORM\ManyToOne(targetEntity="Bizottsag", inversedBy="bizottsagBizottsagSzakdolgozat")
     * @ORM\JoinColumn(name="bizottsag", referencedColumnName="id")
     */
    protected $bizottsag;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Szakdolgozat\Szakdolgozat", inversedBy="szakdolgozatBizottsagSzakdolgozat")
     * @ORM\JoinColumn(name="szakdolgozat", referencedColumnName="id")
     */
    protected $szakdolgozat;

    /**
     * @ORM\OneToMany(targetEntity="BizottsagErtekeles", mappedBy="bizottsagSzakdolgozat")
     */
    protected $bizottsagSzakdolgozatBizottsagErtekeles;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->bizottsagSzakdolgozatBizottsagErtekeles = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set irasbeliEredmeny
     *
     * @param integer $irasbeliEredmeny
     * @return BizottsagSzakdolgozat
     */
    public function setIrasbeliEredmeny($irasbeliEredmeny)
    {
        $this->irasbeliEredmeny = $irasbeliEredmeny;

        return $this;
    }

    /**
     * Get irasbeliEredmeny
     *
     * @return integer 
     */
    public function getIrasbeliEredmeny()
    {
        return $this->irasbeliEredmeny;
    }

    /**
     * Set szobeliEredmeny
     *
     * @param integer $szobeliEredmeny
     * @return BizottsagSzakdolgozat
     */
    public function setSzobeliEredmeny($szobeliEredmeny)
    {
        $this->szobeliEredmeny = $szobeliEredmeny;

        return $this;
    }

    /**
     * Get szobeliEredmeny
     *
     * @return integer 
     */
    public function getSzobeliEredmeny()
    {
        return $this->szobeliEredmeny;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return BizottsagSzakdolgozat
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
     * Set teljesitett
     *
     * @param boolean $teljesitett
     * @return BizottsagSzakdolgozat
     */
    public function setTeljesitett($teljesitett)
    {
        $this->teljesitett = $teljesitett;

        return $this;
    }

    /**
     * Get teljesitett
     *
     * @return boolean 
     */
    public function getTeljesitett()
    {
        return $this->teljesitett;
    }

    /**
     * Set status
     *
     * @param boolean $status
     * @return BizottsagSzakdolgozat
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
     * Set bizottsag
     *
     * @param \AppBundle\Entity\Bizottsag\Bizottsag $bizottsag
     * @return BizottsagSzakdolgozat
     */
    public function setBizottsag(\AppBundle\Entity\Bizottsag\Bizottsag $bizottsag = null)
    {
        $this->bizottsag = $bizottsag;

        return $this;
    }

    /**
     * Get bizottsag
     *
     * @return \AppBundle\Entity\Bizottsag\Bizottsag 
     */
    public function getBizottsag()
    {
        return $this->bizottsag;
    }

    /**
     * Set szakdolgozat
     *
     * @param \AppBundle\Entity\Szakdolgozat\Szakdolgozat $szakdolgozat
     * @return BizottsagSzakdolgozat
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
     * Add bizottsagSzakdolgozatBizottsagErtekeles
     *
     * @param \AppBundle\Entity\Bizottsag\BizottsagErtekeles $bizottsagSzakdolgozatBizottsagErtekeles
     * @return BizottsagSzakdolgozat
     */
    public function addBizottsagSzakdolgozatBizottsagErtekele(\AppBundle\Entity\Bizottsag\BizottsagErtekeles $bizottsagSzakdolgozatBizottsagErtekeles)
    {
        $this->bizottsagSzakdolgozatBizottsagErtekeles[] = $bizottsagSzakdolgozatBizottsagErtekeles;

        return $this;
    }

    /**
     * Remove bizottsagSzakdolgozatBizottsagErtekeles
     *
     * @param \AppBundle\Entity\Bizottsag\BizottsagErtekeles $bizottsagSzakdolgozatBizottsagErtekeles
     */
    public function removeBizottsagSzakdolgozatBizottsagErtekele(\AppBundle\Entity\Bizottsag\BizottsagErtekeles $bizottsagSzakdolgozatBizottsagErtekeles)
    {
        $this->bizottsagSzakdolgozatBizottsagErtekeles->removeElement($bizottsagSzakdolgozatBizottsagErtekeles);
    }

    /**
     * Get bizottsagSzakdolgozatBizottsagErtekeles
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getBizottsagSzakdolgozatBizottsagErtekeles()
    {
        return $this->bizottsagSzakdolgozatBizottsagErtekeles;
    }
}
