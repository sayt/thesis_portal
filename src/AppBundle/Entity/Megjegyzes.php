<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="megjegyzes")
 */
class Megjegyzes
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $megjegyzesSzam;

    /**
     * @ORM\Column(type="string", length=10000)
     */
    private $description;

    /**
     * @ORM\Column(type="datetime")
     */
    private $datum;

    /**
     * @ORM\Column(type="boolean")
     */
    private $status;

    /**
     * @ORM\ManyToOne(targetEntity="Szakdolgozat", inversedBy="szakdolgozatMegjegyzes")
     * @ORM\JoinColumn(name="szakdolgozat", referencedColumnName="id")
     */
    private $szakdolgozat;

    /**
     * @ORM\ManyToOne(targetEntity="Merfoldko", inversedBy="merfoldkoMegjegyzes")
     * @ORM\JoinColumn(name="merfoldko", referencedColumnName="id")
     */
    private $merfoldko;

    /**
     * @ORM\ManyToOne(targetEntity="Konzultacio", inversedBy="konzultacioMegjegyzes")
     * @ORM\JoinColumn(name="konzultacio", referencedColumnName="id")
     */
    private $konzultacio;

    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="userMegjegyzes")
     * @ORM\JoinColumn(name="user", referencedColumnName="id")
     */
    private $user;
}