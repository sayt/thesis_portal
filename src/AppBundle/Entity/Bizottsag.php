<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="bizottsag")
 */
class Bizottsag
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
     * @ORM\Column(type="string", length=20)
     */
    private $felevName;

    /**
     * @ORM\Column(type="string", length=10000)
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $allapot;

    /**
     * @ORM\Column(type="boolean")
     */
    private $publikus;

    /**
     * @ORM\Column(type="boolean")
     */
    private $status;

    /**
     * @ORM\OneToMany(targetEntity="BizottsagTag", mappedBy="bizottsag")
     */
    private $bizottsagBizottsagTag;

    /**
     * @ORM\OneToMany(targetEntity="BizottsagSzakdolgozat", mappedBy="bizottsag")
     */
    private $bizottsagBizottsagSzakdolgozat;
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->bizottsagBizottsagTag = new \Doctrine\Common\Collections\ArrayCollection();
        $this->bizottsagBizottsagSzakdolgozat = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return Bizottsag
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
     * Set felevName
     *
     * @param string $felevName
     * @return Bizottsag
     */
    public function setFelevName($felevName)
    {
        $this->felevName = $felevName;

        return $this;
    }

    /**
     * Get felevName
     *
     * @return string 
     */
    public function getFelevName()
    {
        return $this->felevName;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Bizottsag
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
     * Set allapot
     *
     * @param string $allapot
     * @return Bizottsag
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
     * Set publikus
     *
     * @param boolean $publikus
     * @return Bizottsag
     */
    public function setPublikus($publikus)
    {
        $this->publikus = $publikus;

        return $this;
    }

    /**
     * Get publikus
     *
     * @return boolean 
     */
    public function getPublikus()
    {
        return $this->publikus;
    }

    /**
     * Set status
     *
     * @param boolean $status
     * @return Bizottsag
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
     * Add bizottsagBizottsagTag
     *
     * @param \AppBundle\Entity\Bizottsag\BizottsagTag $bizottsagBizottsagTag
     * @return Bizottsag
     */
    public function addBizottsagBizottsagTag(\AppBundle\Entity\Bizottsag\BizottsagTag $bizottsagBizottsagTag)
    {
        $this->bizottsagBizottsagTag[] = $bizottsagBizottsagTag;

        return $this;
    }

    /**
     * Remove bizottsagBizottsagTag
     *
     * @param \AppBundle\Entity\Bizottsag\BizottsagTag $bizottsagBizottsagTag
     */
    public function removeBizottsagBizottsagTag(\AppBundle\Entity\Bizottsag\BizottsagTag $bizottsagBizottsagTag)
    {
        $this->bizottsagBizottsagTag->removeElement($bizottsagBizottsagTag);
    }

    /**
     * Get bizottsagBizottsagTag
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getBizottsagBizottsagTag()
    {
        return $this->bizottsagBizottsagTag;
    }

    /**
     * Add bizottsagBizottsagSzakdolgozat
     *
     * @param \AppBundle\Entity\Bizottsag\BizottsagSzakdolgozat $bizottsagBizottsagSzakdolgozat
     * @return Bizottsag
     */
    public function addBizottsagBizottsagSzakdolgozat(\AppBundle\Entity\Bizottsag\BizottsagSzakdolgozat $bizottsagBizottsagSzakdolgozat)
    {
        $this->bizottsagBizottsagSzakdolgozat[] = $bizottsagBizottsagSzakdolgozat;

        return $this;
    }

    /**
     * Remove bizottsagBizottsagSzakdolgozat
     *
     * @param \AppBundle\Entity\Bizottsag\BizottsagSzakdolgozat $bizottsagBizottsagSzakdolgozat
     */
    public function removeBizottsagBizottsagSzakdolgozat(\AppBundle\Entity\Bizottsag\BizottsagSzakdolgozat $bizottsagBizottsagSzakdolgozat)
    {
        $this->bizottsagBizottsagSzakdolgozat->removeElement($bizottsagBizottsagSzakdolgozat);
    }

    /**
     * Get bizottsagBizottsagSzakdolgozat
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getBizottsagBizottsagSzakdolgozat()
    {
        return $this->bizottsagBizottsagSzakdolgozat;
    }
}
