<?php

namespace AppBundle\Entity\Szakdolgozat;

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
}