<?php

namespace AppBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $userId;

    /**
     * @ORM\Column(type="string", length=100)
     *
     * @Assert\NotBlank()
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=40)
     *
     * @Assert\NotBlank()
     */
    private $hallgatoiTorzskonyviSzam;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $phoneNumber;

    /**
     * @ORM\Column(type="boolean")
     */
    private $emailSummary;

    /**
     * @ORM\Column(type="datetime")
     */
    private $emailSummaryTime;

    /**
     * @ORM\Column(type="boolean")
     */
    private $status;

    /**
     * @ORM\ManyToOne(targetEntity="Kar", inversedBy="karUser")
     * @ORM\JoinColumn(name="kar", referencedColumnName="id")
     */
    private $kar;

    /**
     * @ORM\ManyToOne(targetEntity="Role", inversedBy="role")
     * @ORM\JoinColumn(name="role", referencedColumnName="id")
     */
    private $role;

    /**
     * @ORM\ManyToOne(targetEntity="Targyak", inversedBy="targy")
     * @ORM\JoinColumn(name="targy", referencedColumnName="id")
     */
    private $targy;

    /**
     * @ORM\OneToMany(targetEntity="FelhasznaloTargyEletut", mappedBy="hallgato")
     */
    private $user;

    /**
     * @ORM\OneToMany(targetEntity="Levelkuldo", mappedBy="felhasznalo")
     */
    private $felhsznalo;

    /**
     * @ORM\OneToMany(targetEntity="Szakirany", mappedBy="szakiranyVezeto")
     */
    private $szakiranyVezeto;

    /**
     * @ORM\OneToMany(targetEntity="SzakdolgozatFelhasznaloKapcsolat", mappedBy="felhasznalo")
     */
    private $userKapcsolat;
    /**
     * @ORM\OneToMany(targetEntity="KulsoCeg", mappedBy="felhasznalo")
     */
    private $userKulsoCeg;

    public function __construct()
    {
        parent::__construct();
        // your own logic
    }
}