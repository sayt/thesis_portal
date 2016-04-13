<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="bizottsagErtekeles")
 */
class BizottsagErtekeles
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
    private $irasbeliSzempontokId;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $irasbeliSzempontokEredmenye;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $szobeliSzempontokId;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $szobeliSzempontokEredmenye;

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
     * @ORM\ManyToOne(targetEntity="BizottsagTag", inversedBy="bizottsagTagErtekeles")
     * @ORM\JoinColumn(name="bizottsagTag", referencedColumnName="id")
     */
    private $bizottsagTag;

    /**
     * @ORM\ManyToOne(targetEntity="BizottsagSzakdolgozat", inversedBy="bizottsagSzakdolgozatBizottsagErtekeles")
     * @ORM\JoinColumn(name="bizottsagSzakdolgozat", referencedColumnName="id")
     */
    private $bizottsagSzakdolgozat;
}