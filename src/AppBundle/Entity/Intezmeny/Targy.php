<?php

namespace AppBundle\Entity\Intezmeny;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="targy")
 */
class Targy
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
    private $status;

    /**
     * @ORM\OneToMany(targetEntity="FelhasznaloTargyEletut", mappedBy="targy")
     */
    private $targyFelhasznaloTargyEletut;

    /**
     * @ORM\OneToMany(targetEntity="User", mappedBy="targy")
     */
    private $targyUser;

    /**
     * @ORM\OneToMany(targetEntity="Szakirany", mappedBy="targy")
     */
    private $targySzakirany;
}