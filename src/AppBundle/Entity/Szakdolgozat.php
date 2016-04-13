<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="szakdolgozat")
 */
class Szakdolgozat
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
    private $hunName;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $engName;

    /**
     * @ORM\Column(type="int")
     */
    private $hallgatoSzam;

    /**
     * @ORM\Column(type="string", length=10000)
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $kiirasEve;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $language;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $allapot;

    /**
     * @ORM\Column(type="date")
     */
    private $beadasHatarido;

    /**
     * @ORM\Column(type="string", length=10000)
     */
    private $feladat;

    /**
     * @ORM\Column(type="string", length=10000)
     */
    private $tartalmazniaKell;

    /**
     * @ORM\Column(type="boolean")
     */
    private $titkos;

    /**
     * @ORM\Column(type="boolean")
     */
    private $status;

    /**
     * @ORM\ManyToOne(targetEntity="Szak", inversedBy="szakSzakdolgozat")
     * @ORM\JoinColumn(name="szak", referencedColumnName="id")
     */
    private $szak;

    /**
     * @ORM\OneToMany(targetEntity="SzakdolgozatFelhasznaloKapcsolat", mappedBy="szakdolgozat")
     */
    private $szakdolgozatSzakdolgozatFelhasznaloKapcsolat;

    /**
     * @ORM\OneToMany(targetEntity="Konzultacio", mappedBy="szakdolgozat")
     */
    private $szakdolgozatKonzultacio;

    /**
     * @ORM\OneToMany(targetEntity="Levelkuldo", mappedBy="szakdolgozat")
     */
    private $szakdolgozatLevelkuldo;

    /**
     * @ORM\OneToMany(targetEntity="Merfoldko", mappedBy="szakdolgozat")
     */
    private $szakdolgozatMerfoldko;

    /**
     * @ORM\OneToMany(targetEntity="Megjegyzes", mappedBy="szakdolgozat")
     */
    private $szakdolgozatMegjegyzes;

    /**
     * @ORM\OneToMany(targetEntity="File", mappedBy="szakdolgozat")
     */
    private $szakdolgozatFile;
}