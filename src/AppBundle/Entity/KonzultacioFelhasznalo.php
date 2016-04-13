<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="konzultacioFelhasznalo")
 */
class KonzultacioFelhasznalo
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="datetime")
     */
    private $ajanlotDatum;

    /**
     * @ORM\Column(type="datetime")
     */
    private $elfogadottDatum;

    /**
     * @ORM\Column(type="boolean")
     */
    private $allapot;

    /**
     * @ORM\Column(type="boolean")
     */
    private $status;

    /**
     * @ORM\ManyToOne(targetEntity="Konzultacio", inversedBy="konzultacioKonzultacioFelhasznalo")
     * @ORM\JoinColumn(name="konzultacio", referencedColumnName="id")
     */
    private $konzultacio;

    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="userKonzultacioFelhasznalo")
     * @ORM\JoinColumn(name="user", referencedColumnName="id")
     */
    private $user;
}