<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="felhasznaloTargyEletut")
 */
class FelhasznaloTargyEletut
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
    private $felvetelIdeje;

    /**
     * @ORM\Column(type="string", length=40)
     */
    private $allapot;

    /**
     * @ORM\Column(type="boolean")
     */
    private $status;

    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="userFelhasznaloTargyEletut")
     * @ORM\JoinColumn(name="user", referencedColumnName="id")
     */
    private $user;

    /**
     * @ORM\ManyToOne(targetEntity="Targy", inversedBy="targyFelhasznaloTargyEletut")
     * @ORM\JoinColumn(name="targy", referencedColumnName="id")
     */
    private $targy;

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
     * Set felvetelIdeje
     *
     * @param string $felvetelIdeje
     * @return FelhasznaloTargyEletut
     */
    public function setFelvetelIdeje($felvetelIdeje)
    {
        $this->felvetelIdeje = $felvetelIdeje;

        return $this;
    }

    /**
     * Get felvetelIdeje
     *
     * @return string 
     */
    public function getFelvetelIdeje()
    {
        return $this->felvetelIdeje;
    }

    /**
     * Set allapot
     *
     * @param string $allapot
     * @return FelhasznaloTargyEletut
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
     * @return FelhasznaloTargyEletut
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
     * @return FelhasznaloTargyEletut
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
     * Set targy
     *
     * @param \AppBundle\Entity\Felhasznalo\Targy $targy
     * @return FelhasznaloTargyEletut
     */
    public function setTargy(\AppBundle\Entity\Felhasznalo\Targy $targy = null)
    {
        $this->targy = $targy;

        return $this;
    }

    /**
     * Get targy
     *
     * @return \AppBundle\Entity\Felhasznalo\Targy 
     */
    public function getTargy()
    {
        return $this->targy;
    }
}
