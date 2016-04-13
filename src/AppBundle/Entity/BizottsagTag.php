<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="bizottsagTag")
 */
class BizottsagTag
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="boolean")
     */
    private $elnok;

    /**
     * @ORM\Column(type="boolean")
     */
    private $elfogadta;

    /**
     * @ORM\Column(type="boolean")
     */
    private $status;

    /**
     * @ORM\ManyToOne(targetEntity="Bizottsag", inversedBy="bizottsagBizottsagTag")
     * @ORM\JoinColumn(name="bizottsag", referencedColumnName="id")
     */
    private $bizottsag;

    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="userBizottsagTag")
     * @ORM\JoinColumn(name="user", referencedColumnName="id")
     */
    private $user;

    /**
     * @ORM\OneToMany(targetEntity="BizottsagErtekeles", mappedBy="bizottsagTag")
     */
    private $bizottsagTagErtekeles;
}