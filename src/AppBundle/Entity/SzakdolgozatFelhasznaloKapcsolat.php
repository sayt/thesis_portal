<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="SzakdolgozatFelhasznaloKapcsolat")
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
     * @ORM\JoinColumn(name="felhasznalo", referencedColumnName="id")
     */
    private $felhasznalo;

    /**
     * @ORM\ManyToOne(targetEntity="Szakdolgozat", inversedBy="szakdolgozatKapcsolat")
     * @ORM\JoinColumn(name="szakdolgozat", referencedColumnName="id")
     */
    private $szakdolgozat;
}