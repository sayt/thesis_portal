<?php

namespace AppBundle\Entity\Felhasznalo;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="userRoleConnect")
 */
class UserRoleConnect
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="datetime")
     */
    protected $ervenyessegkezdete;

    /**
     * @ORM\Column(type="datetime")
     */
    protected $ervenyessegvege;

    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="userUserRoleConnectmodositoUser")
     * @ORM\JoinColumn(name="modositoUser", referencedColumnName="id")
     */
    protected $modositoUser;

    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="userUserRoleConnect")
     * @ORM\JoinColumn(name="user", referencedColumnName="id")
     */
    protected $user;

    /**
     * @ORM\ManyToOne(targetEntity="Role", inversedBy="roleUserRoleConnect")
     * @ORM\JoinColumn(name="role", referencedColumnName="id")
     */
    protected $role;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set ervenyessegkezdete
     *
     * @param \DateTime $ervenyessegkezdete
     * @return UserRoleConnect
     */
    public function setErvenyessegkezdete($ervenyessegkezdete)
    {
        $this->ervenyessegkezdete = $ervenyessegkezdete;

        return $this;
    }

    /**
     * Get ervenyessegkezdete
     *
     * @return \DateTime 
     */
    public function getErvenyessegkezdete()
    {
        return $this->ervenyessegkezdete;
    }

    /**
     * Set ervenyessegvege
     *
     * @param \DateTime $ervenyessegvege
     * @return UserRoleConnect
     */
    public function setErvenyessegvege($ervenyessegvege)
    {
        $this->ervenyessegvege = $ervenyessegvege;

        return $this;
    }

    /**
     * Get ervenyessegvege
     *
     * @return \DateTime 
     */
    public function getErvenyessegvege()
    {
        return $this->ervenyessegvege;
    }

    /**
     * Set modositoUser
     *
     * @param \AppBundle\Entity\Felhasznalo\User $modositoUser
     * @return UserRoleConnect
     */
    public function setModositoUser(\AppBundle\Entity\Felhasznalo\User $modositoUser = null)
    {
        $this->modositoUser = $modositoUser;

        return $this;
    }

    /**
     * Get modositoUser
     *
     * @return \AppBundle\Entity\Felhasznalo\User 
     */
    public function getModositoUser()
    {
        return $this->modositoUser;
    }

    /**
     * Set user
     *
     * @param \AppBundle\Entity\Felhasznalo\User $user
     * @return UserRoleConnect
     */
    public function setUser(\AppBundle\Entity\Felhasznalo\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \AppBundle\Entity\Felhasznalo\User 
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set role
     *
     * @param \AppBundle\Entity\Felhasznalo\Role $role
     * @return UserRoleConnect
     */
    public function setRole(\AppBundle\Entity\Felhasznalo\Role $role = null)
    {
        $this->role = $role;

        return $this;
    }

    /**
     * Get role
     *
     * @return \AppBundle\Entity\Felhasznalo\Role 
     */
    public function getRole()
    {
        return $this->role;
    }
}
