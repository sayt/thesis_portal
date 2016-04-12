<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

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
     * @ORM\OneToOne(targetEntity="User", inversedBy="szakiranyVezeto")
     * @ORM\JoinColumn(name="szakirany_vezeto", referencedColumnName="id")
     */
    private $szakiranyVezeto;

    /**
     * @ORM\OneToOne(targetEntity="Targy", inversedBy="szakiranyTargy")
     * @ORM\JoinColumn(name="szakirany_targy", referencedColumnName="id")
     */
    private $szakiranyTargy;
}