<?php

namespace AppBundle\Entity\Szakdolgozat;

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
    protected $id;

    /**
     * @ORM\Column(type="datetime")
     */
    protected $ajanlotDatum;

    /**
     * @ORM\Column(type="datetime")
     */
    protected $elfogadottDatum;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $allapot;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $status;

    /**
     * @ORM\ManyToOne(targetEntity="Konzultacio", inversedBy="konzultacioKonzultacioFelhasznalo")
     * @ORM\JoinColumn(name="konzultacio", referencedColumnName="id")
     */
    protected $konzultacio;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Felhasznalo\User", inversedBy="userKonzultacioFelhasznalo")
     * @ORM\JoinColumn(name="user", referencedColumnName="id")
     */
    protected $user;


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
     * @param \AppBundle\Entity\Felhasznalo\User $user
     * @return KonzultacioFelhasznalo
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
}
