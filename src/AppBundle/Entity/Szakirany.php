<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="szakirany")
 */
class Szakirany
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
     * @ORM\ManyToOne(targetEntity="Szak", inversedBy="szakSzakirany")
     * @ORM\JoinColumn(name="szak", referencedColumnName="id")
     */
    private $szak;

    /**
     * @ORM\OneToOne(targetEntity="User", inversedBy="userSzakirany")
     * @ORM\JoinColumn(name="felhasznalo", referencedColumnName="id")
     */
    private $felhasznalo;

    /**
     * @ORM\OneToOne(targetEntity="Targy", inversedBy="targySzakirany")
     * @ORM\JoinColumn(name="targy", referencedColumnName="id")
     */
    private $targy;
}