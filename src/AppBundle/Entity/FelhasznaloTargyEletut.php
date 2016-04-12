<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="felhasznalo_targy_eletut")
 */
class FelhasznaloTargyEletut
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
    private $felvetelIdeje;

    /**
     * @ORM\Column(type="string", length=40)
     */
    private $allapot;

    /**
     * @ORM\Column(type="boolean")
     */
    private $status;

    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="user")
     * @ORM\JoinColumn(name="hallgato", referencedColumnName="id")
     */
    private $hallgato;

    /**
     * @ORM\ManyToOne(targetEntity="Targy", inversedBy="targy")
     * @ORM\JoinColumn(name="targy", referencedColumnName="id")
     */
    private $targy;
}