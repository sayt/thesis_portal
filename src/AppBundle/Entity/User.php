<?php

namespace AppBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

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
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=40)
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
     * @ORM\ManyToOne(targetEntity="Role", inversedBy="roleUser")
     * @ORM\JoinColumn(name="role", referencedColumnName="id")
     */
    private $role;

    /**
     * @ORM\ManyToOne(targetEntity="Targy", inversedBy="targyUser")
     * @ORM\JoinColumn(name="targy", referencedColumnName="id")
     */
    private $targy;

    /**
     * @ORM\OneToMany(targetEntity="FelhasznaloTargyEletut", mappedBy="user")
     */
    private $userFelhasznaloTargyEletut;

    /**
     * @ORM\OneToMany(targetEntity="Levelkuldo", mappedBy="user")
     */
    private $userLevelkuldo;

    /**
     * @ORM\OneToMany(targetEntity="Szakirany", mappedBy="user")
     */
    private $userSzakirany;

    /**
     * @ORM\OneToMany(targetEntity="SzakdolgozatFelhasznaloKapcsolat", mappedBy="user")
     */
    private $userKapcsolat;

    /**
     * @ORM\OneToMany(targetEntity="KulsoCeg", mappedBy="user")
     */
    private $userKulsoCeg;

    /**
     * @ORM\OneToMany(targetEntity="Konzultacio", mappedBy="user")
     */
    private $userKonzultacio;

    /**
     * @ORM\OneToMany(targetEntity="Merfoldko", mappedBy="user")
     */
    private $userMerfoldko;

    /**
     * @ORM\OneToMany(targetEntity="Megjegyzes", mappedBy="user")
     */
    private $userMegjegyzes;

    /**
     * @ORM\OneToMany(targetEntity="File", mappedBy="user")
     */
    private $userFile;

    /**
     * @ORM\OneToMany(targetEntity="KonzultacioFelhasznalo", mappedBy="user")
     */
    private $userKonzultacioFelhasznalo;

    /**
     * @ORM\OneToMany(targetEntity="BizottsagTag", mappedBy="user")
     */
    private $userBizottsagTag;

    public function __construct()
    {
        parent::__construct();
        // your own logic
    }
}