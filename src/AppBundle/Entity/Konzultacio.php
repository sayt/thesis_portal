<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="konzultacio")
 */
class Konzultacio
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
     * @ORM\Column(type="string", length=10000)
     */
    private $description;

    /**
     * @ORM\Column(type="boolean")
     */
    private $datumModositas;

    /**
     * @ORM\Column(type="datetime")
     */
    private $veglegesDatum;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $allapot;

    /**
     * @ORM\Column(type="boolean")
     */
    private $status;

    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="userKonzultacio")
     * @ORM\JoinColumn(name="user", referencedColumnName="id")
     */
    private $user;

    /**
     * @ORM\ManyToOne(targetEntity="Szakdolgozat", inversedBy="szakdolgozatKonzultacio")
     * @ORM\JoinColumn(name="szakdolgozat", referencedColumnName="id")
     */
    private $szakdolgozat;

    /**
     * @ORM\OneToMany(targetEntity="Megjegyzes", mappedBy="konzultacio")
     */
    private $konzultacioMegjegyzes;

    /**
     * @ORM\OneToMany(targetEntity="KonzultacioFelhasznalo", mappedBy="konzultacio")
     */
    private $konzultacioKonzultacioFelhasznalo;
}