<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity
 * @ORM\Table(name="konzultacioFelhasznalo")
 */
class KonzultacioFelhasznalo
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="datetime")
     */
    private $ajanlotDatum;

    /**
     * @ORM\Column(type="datetime")
     */
    private $elfogadottDatum;

    /**
     * @ORM\Column(type="boolean")
     */
    private $allapot;

    /**
     * @ORM\Column(type="boolean")
     */
    private $status;

    /**
     * @ORM\ManyToOne(targetEntity="Konzultacio", inversedBy="konzultacioKonzultacioFelhasznalo")
     * @ORM\JoinColumn(name="konzultacio", referencedColumnName="id")
     */
    private $konzultacio;

    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="userKonzultacioFelhasznalo")
     * @ORM\JoinColumn(name="user", referencedColumnName="id")
     */
    private $user;

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
     * Set ajanlotDatum
     *
     * @param \DateTime $ajanlotDatum
     * @return KonzultacioFelhasznalo
     */
    public function setAjanlotDatum($ajanlotDatum)
    {
        $this->ajanlotDatum = $ajanlotDatum;

        return $this;
    }

    /**
     * Get ajanlotDatum
     *
     * @return \DateTime 
     */
    public function getAjanlotDatum()
    {
        return $this->ajanlotDatum;
    }

    /**
     * Set elfogadottDatum
     *
     * @param \DateTime $elfogadottDatum
     * @return KonzultacioFelhasznalo
     */
    public function setElfogadottDatum($elfogadottDatum)
    {
        $this->elfogadottDatum = $elfogadottDatum;

        return $this;
    }

    /**
     * Get elfogadottDatum
     *
     * @return \DateTime 
     */
    public function getElfogadottDatum()
    {
        return $this->elfogadottDatum;
    }

    /**
     * Set allapot
     *
     * @param boolean $allapot
     * @return KonzultacioFelhasznalo
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
     * Set status
     *
     * @param boolean $status
     * @return KonzultacioFelhasznalo
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
     * Set konzultacio
     *
     * @param \AppBundle\Entity\Szakdolgozat\Konzultacio $konzultacio
     * @return KonzultacioFelhasznalo
     */
    public function setKonzultacio(\AppBundle\Entity\Szakdolgozat\Konzultacio $konzultacio = null)
    {
        $this->konzultacio = $konzultacio;

        return $this;
    }

    /**
     * Get konzultacio
     *
     * @return \AppBundle\Entity\Szakdolgozat\Konzultacio 
     */
    public function getKonzultacio()
    {
        return $this->konzultacio;
    }

    /**
     * Set user
     *
     * @param \AppBundle\Entity\Szakdolgozat\User $user
     * @return KonzultacioFelhasznalo
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
}
