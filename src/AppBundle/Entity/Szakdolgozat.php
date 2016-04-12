<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

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
     * @ORM\ManyToOne(targetEntity="Szak", inversedBy="szakdolgozatSzak")
     * @ORM\JoinColumn(name="szak", referencedColumnName="id")
     */
    private $szak;
}