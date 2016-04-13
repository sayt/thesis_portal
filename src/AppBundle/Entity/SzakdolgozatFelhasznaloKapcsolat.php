<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="szakdolgozatFelhasznaloKapcsolat")
 */
class SzakdolgozatFelhasznaloKapcsolat
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $viszony;

    /**
     * @ORM\Column(type="boolean")
     */
    private $allapot;

    /**
     * @ORM\Column(type="integer")
     */
    private $peldany;

    /**
     * @ORM\Column(type="boolean")
     */
    private $status;

    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="userKapcsolat")
     * @ORM\JoinColumn(name="user", referencedColumnName="id")
     */
    private $user;

    /**
     * @ORM\ManyToOne(targetEntity="Szakdolgozat", inversedBy="szakdolgozatSzakdolgozatFelhasznaloKapcsolat")
     * @ORM\JoinColumn(name="szakdolgozat", referencedColumnName="id")
     */
    private $szakdolgozat;

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
     * Set viszony
     *
     * @param string $viszony
     * @return SzakdolgozatFelhasznaloKapcsolat
     */
    public function setViszony($viszony)
    {
        $this->viszony = $viszony;

        return $this;
    }

    /**
     * Get viszony
     *
     * @return string 
     */
    public function getViszony()
    {
        return $this->viszony;
    }

    /**
     * Set allapot
     *
     * @param boolean $allapot
     * @return SzakdolgozatFelhasznaloKapcsolat
     */
    public function setAllapot($allapot)
    {
        $this->allapot = $allapot;

        return $this;
    }

    /**
     * Get allapot
     *
     * @return boolean 
     */
    public function getAllapot()
    {
        return $this->allapot;
    }

    /**
     * Set peldany
     *
     * @param integer $peldany
     * @return SzakdolgozatFelhasznaloKapcsolat
     */
    public function setPeldany($peldany)
    {
        $this->peldany = $peldany;

        return $this;
    }

    /**
     * Get peldany
     *
     * @return integer 
     */
    public function getPeldany()
    {
        return $this->peldany;
    }

    /**
     * Set status
     *
     * @param boolean $status
     * @return SzakdolgozatFelhasznaloKapcsolat
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
     * @param \AppBundle\Entity\Szakdolgozat\User $user
     * @return SzakdolgozatFelhasznaloKapcsolat
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
     * Set szakdolgozat
     *
     * @param \AppBundle\Entity\Szakdolgozat\Szakdolgozat $szakdolgozat
     * @return SzakdolgozatFelhasznaloKapcsolat
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
}
