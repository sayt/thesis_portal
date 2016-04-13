<?php

namespace AppBundle\Entity\Szakdolgozat;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="merfoldko")
 */
class Merfoldko
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
     * @ORM\Column(type="date")
     */
    private $teljesitesiHatarido;

    /**
     * @ORM\Column(type="boolean")
     */
    private $beadasra;

    /**
     * @ORM\Column(type="boolean")
     */
    private $status;

    /**
     * @ORM\ManyToOne(targetEntity="Szakdolgozat", inversedBy="szakdolgozatMerfoldko")
     * @ORM\JoinColumn(name="szakdolgozat", referencedColumnName="id")
     */
    private $szakdolgozat;

    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="userMerfoldko")
     * @ORM\JoinColumn(name="user", referencedColumnName="id")
     */
    private $user;

    /**
     * @ORM\OneToMany(targetEntity="Megjegyzes", mappedBy="merfoldko")
     */
    private $merfoldkoMegjegyzes;

    /**
     * @ORM\OneToMany(targetEntity="File", mappedBy="merfoldko")
     */
    private $merfoldkoFile;
}