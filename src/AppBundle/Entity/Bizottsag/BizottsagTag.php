<?php

namespace AppBundle\Entity\Bizottsag;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="bizottsagTag")
 */
class BizottsagTag
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="boolean")
     */
    private $elnok;

    /**
     * @ORM\Column(type="boolean")
     */
    private $elfogadta;

    /**
     * @ORM\Column(type="boolean")
     */
    private $status;

    /**
     * @ORM\ManyToOne(targetEntity="Bizottsag", inversedBy="bizottsagBizottsagTag")
     * @ORM\JoinColumn(name="bizottsag", referencedColumnName="id")
     */
    private $bizottsag;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Felhasznalo\User", inversedBy="userBizottsagTag")
     * @ORM\JoinColumn(name="user", referencedColumnName="id")
     */
    private $user;

    /**
     * @ORM\OneToMany(targetEntity="BizottsagErtekeles", mappedBy="bizottsagTag")
     */
    private $bizottsagTagErtekeles;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->bizottsagTagErtekeles = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set elnok
     *
     * @param boolean $elnok
     * @return BizottsagTag
     */
    public function setElnok($elnok)
    {
        $this->elnok = $elnok;

        return $this;
    }

    /**
     * Get elnok
     *
     * @return boolean 
     */
    public function getElnok()
    {
        return $this->elnok;
    }

    /**
     * Set elfogadta
     *
     * @param boolean $elfogadta
     * @return BizottsagTag
     */
    public function setElfogadta($elfogadta)
    {
        $this->elfogadta = $elfogadta;

        return $this;
    }

    /**
     * Get elfogadta
     *
     * @return boolean 
     */
    public function getElfogadta()
    {
        return $this->elfogadta;
    }

    /**
     * Set status
     *
     * @param boolean $status
     * @return BizottsagTag
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
     * @return BizottsagTag
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
     * Set user
     *
     * @param \AppBundle\Entity\Felhasznalo\User $user
     * @return BizottsagTag
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
     * Add bizottsagTagErtekeles
     *
     * @param \AppBundle\Entity\Bizottsag\BizottsagErtekeles $bizottsagTagErtekeles
     * @return BizottsagTag
     */
    public function addBizottsagTagErtekele(\AppBundle\Entity\Bizottsag\BizottsagErtekeles $bizottsagTagErtekeles)
    {
        $this->bizottsagTagErtekeles[] = $bizottsagTagErtekeles;

        return $this;
    }

    /**
     * Remove bizottsagTagErtekeles
     *
     * @param \AppBundle\Entity\Bizottsag\BizottsagErtekeles $bizottsagTagErtekeles
     */
    public function removeBizottsagTagErtekele(\AppBundle\Entity\Bizottsag\BizottsagErtekeles $bizottsagTagErtekeles)
    {
        $this->bizottsagTagErtekeles->removeElement($bizottsagTagErtekeles);
    }

    /**
     * Get bizottsagTagErtekeles
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getBizottsagTagErtekeles()
    {
        return $this->bizottsagTagErtekeles;
    }
}
