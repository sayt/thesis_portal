<?php

namespace AppBundle\Entity\Bizottsag;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="bizottsagSzakdolgozat")
 */
class BizottsagSzakdolgozat
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
    private $irasbeliEredmeny;

    /**
     * @ORM\Column(type="integer")
     */
    private $szobeliEredmeny;

    /**
     * @ORM\Column(type="string", length=10000)
     */
    private $description;

    /**
     * @ORM\Column(type="boolean")
     */
    private $teljesitett;

    /**
     * @ORM\Column(type="boolean")
     */
    private $status;

    /**
     * @ORM\ManyToOne(targetEntity="Bizottsag", inversedBy="bizottsagBizottsagSzakdolgozat")
     * @ORM\JoinColumn(name="bizottsag", referencedColumnName="id")
     */
    private $bizottsag;

    /**
     * @ORM\ManyToOne(targetEntity="Szakdolgozat", inversedBy="szakdolgozaBizottsagSzakdolgozat")
     * @ORM\JoinColumn(name="szakdolgozat", referencedColumnName="id")
     */
    private $szakdolgozat;

    /**
     * @ORM\OneToMany(targetEntity="BizottsagErtekeles", mappedBy="bizottsagSzakdolgozat")
     */
    private $bizottsagSzakdolgozatBizottsagErtekeles;
}