<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="bizottsagErtekeles")
 */
class BizottsagErtekeles
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
    private $irasbeliSzempontokId;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $irasbeliSzempontokEredmenye;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $szobeliSzempontokId;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $szobeliSzempontokEredmenye;

    /**
     * @ORM\Column(type="string", length=10000)
     */
    private $description;

    /**
     * @ORM\Column(type="boolean")
     */
    private $teljesitett;

    /**
     * @ORM\Column(type="boolean")
     */
    private $status;

    /**
     * @ORM\ManyToOne(targetEntity="BizottsagTag", inversedBy="bizottsagTagErtekeles")
     * @ORM\JoinColumn(name="bizottsagTag", referencedColumnName="id")
     */
    private $bizottsagTag;

    /**
     * @ORM\ManyToOne(targetEntity="BizottsagSzakdolgozat", inversedBy="bizottsagSzakdolgozatBizottsagErtekeles")
     * @ORM\JoinColumn(name="bizottsagSzakdolgozat", referencedColumnName="id")
     */
    private $bizottsagSzakdolgozat;

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
     * Set irasbeliSzempontokId
     *
     * @param string $irasbeliSzempontokId
     * @return BizottsagErtekeles
     */
    public function setIrasbeliSzempontokId($irasbeliSzempontokId)
    {
        $this->irasbeliSzempontokId = $irasbeliSzempontokId;

        return $this;
    }

    /**
     * Get irasbeliSzempontokId
     *
     * @return string 
     */
    public function getIrasbeliSzempontokId()
    {
        return $this->irasbeliSzempontokId;
    }

    /**
     * Set irasbeliSzempontokEredmenye
     *
     * @param string $irasbeliSzempontokEredmenye
     * @return BizottsagErtekeles
     */
    public function setIrasbeliSzempontokEredmenye($irasbeliSzempontokEredmenye)
    {
        $this->irasbeliSzempontokEredmenye = $irasbeliSzempontokEredmenye;

        return $this;
    }

    /**
     * Get irasbeliSzempontokEredmenye
     *
     * @return string 
     */
    public function getIrasbeliSzempontokEredmenye()
    {
        return $this->irasbeliSzempontokEredmenye;
    }

    /**
     * Set szobeliSzempontokId
     *
     * @param string $szobeliSzempontokId
     * @return BizottsagErtekeles
     */
    public function setSzobeliSzempontokId($szobeliSzempontokId)
    {
        $this->szobeliSzempontokId = $szobeliSzempontokId;

        return $this;
    }

    /**
     * Get szobeliSzempontokId
     *
     * @return string 
     */
    public function getSzobeliSzempontokId()
    {
        return $this->szobeliSzempontokId;
    }

    /**
     * Set szobeliSzempontokEredmenye
     *
     * @param string $szobeliSzempontokEredmenye
     * @return BizottsagErtekeles
     */
    public function setSzobeliSzempontokEredmenye($szobeliSzempontokEredmenye)
    {
        $this->szobeliSzempontokEredmenye = $szobeliSzempontokEredmenye;

        return $this;
    }

    /**
     * Get szobeliSzempontokEredmenye
     *
     * @return string 
     */
    public function getSzobeliSzempontokEredmenye()
    {
        return $this->szobeliSzempontokEredmenye;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return BizottsagErtekeles
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
     * @return BizottsagErtekeles
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
     * @return BizottsagErtekeles
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
     * Set bizottsagTag
     *
     * @param \AppBundle\Entity\Bizottsag\BizottsagTag $bizottsagTag
     * @return BizottsagErtekeles
     */
    public function setBizottsagTag(\AppBundle\Entity\Bizottsag\BizottsagTag $bizottsagTag = null)
    {
        $this->bizottsagTag = $bizottsagTag;

        return $this;
    }

    /**
     * Get bizottsagTag
     *
     * @return \AppBundle\Entity\Bizottsag\BizottsagTag 
     */
    public function getBizottsagTag()
    {
        return $this->bizottsagTag;
    }

    /**
     * Set bizottsagSzakdolgozat
     *
     * @param \AppBundle\Entity\Bizottsag\BizottsagSzakdolgozat $bizottsagSzakdolgozat
     * @return BizottsagErtekeles
     */
    public function setBizottsagSzakdolgozat(\AppBundle\Entity\Bizottsag\BizottsagSzakdolgozat $bizottsagSzakdolgozat = null)
    {
        $this->bizottsagSzakdolgozat = $bizottsagSzakdolgozat;

        return $this;
    }

    /**
     * Get bizottsagSzakdolgozat
     *
     * @return \AppBundle\Entity\Bizottsag\BizottsagSzakdolgozat 
     */
    public function getBizottsagSzakdolgozat()
    {
        return $this->bizottsagSzakdolgozat;
    }
}
