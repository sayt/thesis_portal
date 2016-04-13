<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="szak")
 */
class Szak
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
     * @ORM\Column(type="boolean")
     */
    private $status;

    /**
     * @ORM\ManyToOne(targetEntity="Intezet", inversedBy="intezetSzak")
     * @ORM\JoinColumn(name="intezet", referencedColumnName="id")
     */
    private $intezet;

    /**
     * @ORM\OneToMany(targetEntity="Szakirany", mappedBy="szak")
     */
    private $szakSzakirany;

    /**
     * @ORM\OneToMany(targetEntity="Role", mappedBy="szak")
     */
    private $szakRole;

    /**
     * @ORM\OneToMany(targetEntity="Szakdolgozat", mappedBy="szak")
     */
    private $szakSzakdolgozat;
}