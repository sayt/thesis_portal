<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="file")
 */
class File
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
     * @ORM\Column(type="string", length=1000)
     */
    private $location;

    /**
     * @ORM\Column(type="integer")
     */
    private $fileSzam;

    /**
     * @ORM\Column(type="datetime")
     */
    private $datum;

    /**
     * @ORM\Column(type="boolean")
     */
    private $status;

    /**
     * @ORM\ManyToOne(targetEntity="Szakdolgozat", inversedBy="szakdolgozatFile")
     * @ORM\JoinColumn(name="szakdolgozat", referencedColumnName="id")
     */
    private $szakdolgozat;

    /**
     * @ORM\ManyToOne(targetEntity="Merfoldko", inversedBy="merfoldkoFiles")
     * @ORM\JoinColumn(name="merfoldko", referencedColumnName="id")
     */
    private $merfoldko;

    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="userFile")
     * @ORM\JoinColumn(name="user", referencedColumnName="id")
     */
    private $user;
}