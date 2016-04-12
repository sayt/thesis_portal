<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

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
     * @ORM\OneToMany(targetEntity="User", mappedBy="karUser")
     */
    private $karUser;

    /**
     * @ORM\OneToMany(targetEntity="Intezet", mappedBy="karIntezet")
     */
    private $karIntezet;

    /**
     * @ORM\OneToMany(targetEntity="Role", mappedBy="karRole")
     */
    private $karRole;
}