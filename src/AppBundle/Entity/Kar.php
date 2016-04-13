<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="kar")
 */
class Kar
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
    private $Name;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $intezmenyName;

    /**
     * @ORM\OneToMany(targetEntity="User", mappedBy="kar")
     */
    private $karUser;

    /**
     * @ORM\OneToMany(targetEntity="Intezet", mappedBy="kar")
     */
    private $karIntezet;

    /**
     * @ORM\OneToMany(targetEntity="Role", mappedBy="kar")
     */
    private $karRole;
}