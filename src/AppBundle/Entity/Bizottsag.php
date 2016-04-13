<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="bizottsag")
 */
class Bizottsag
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
     * @ORM\Column(type="string", length=20)
     */
    private $felevName;

    /**
     * @ORM\Column(type="string", length=10000)
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $allapot;

    /**
     * @ORM\Column(type="boolean")
     */
    private $publikus;

    /**
     * @ORM\Column(type="boolean")
     */
    private $status;

    /**
     * @ORM\OneToMany(targetEntity="BizottsagTag", mappedBy="bizottsag")
     */
    private $bizottsagBizottsagTag;

    /**
     * @ORM\OneToMany(targetEntity="BizottsagSzakdolgozat", mappedBy="bizottsag")
     */
    private $bizottsagBizottsagSzakdolgozat;
}