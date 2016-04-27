<?php

namespace AppBundle\Entity\Intezmeny;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="hatarido")
 */
class Hatarido
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $name;

    /**
     * @ORM\Column(type="string", length=10000)
     */
    protected $description;

    /**
     * @ORM\Column(type="datetime")
     */
    protected $kezdete;

    /**
     * @ORM\Column(type="datetime")
     */
    protected $vege;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $status;


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
     * @return Hatarido
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
     * @return Hatarido
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
     * Set kezdete
     *
     * @param \DateTime $kezdete
     * @return Hatarido
     */
    public function setKezdete($kezdete)
    {
        $this->kezdete = $kezdete;

        return $this;
    }

    /**
     * Get kezdete
     *
     * @return \DateTime 
     */
    public function getKezdete()
    {
        return $this->kezdete;
    }

    /**
     * Set vege
     *
     * @param \DateTime $vege
     * @return Hatarido
     */
    public function setVege($vege)
    {
        $this->vege = $vege;

        return $this;
    }

    /**
     * Get vege
     *
     * @return \DateTime 
     */
    public function getVege()
    {
        return $this->vege;
    }

    /**
     * Set status
     *
     * @param boolean $status
     * @return Hatarido
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
}
