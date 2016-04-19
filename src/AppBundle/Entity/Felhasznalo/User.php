<?php

namespace AppBundle\Entity\Felhasznalo;

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
    protected $id;

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
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Intezmeny\Kar", inversedBy="karUser")
     * @ORM\JoinColumn(name="kar", referencedColumnName="id")
     */
    private $kar;

    /**
     * @ORM\ManyToOne(targetEntity="Role", inversedBy="roleUser")
     * @ORM\JoinColumn(name="role", referencedColumnName="id")
     */
    private $role;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Intezmeny\Targy", inversedBy="targyUser")
     * @ORM\JoinColumn(name="targy", referencedColumnName="id")
     */
    private $targy;

    /**
     * @ORM\OneToMany(targetEntity="FelhasznaloTargyEletut", mappedBy="user")
     *
     * @var \Doctrine\Common\Collections\Collection $userFelhasznaloTargyEletut
     */
    private $userFelhasznaloTargyEletut;

    /**
     * @ORM\OneToMany(targetEntity="Levelkuldo", mappedBy="user")
     *
     * @var \Doctrine\Common\Collections\Collection $userLevelkuldo
     */
    private $userLevelkuldo;

    /**
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Intezmeny\Szakirany", mappedBy="user")
     *
     * @var \Doctrine\Common\Collections\Collection $userSzakirany
     */
    private $userSzakirany;

    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Szakdolgozat\SzakdolgozatFelhasznaloKapcsolat", mappedBy="user")
     *
     * @var \Doctrine\Common\Collections\Collection $userKapcsolat
     */
    private $userKapcsolat;

    /**
     * @ORM\OneToMany(targetEntity="KulsoCeg", mappedBy="user")
     *
     * @var \Doctrine\Common\Collections\Collection $userKulsoCeg
     */
    private $userKulsoCeg;

    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Szakdolgozat\Konzultacio", mappedBy="user")
     *
     * @var \Doctrine\Common\Collections\Collection $userKonzultacio
     */
    private $userKonzultacio;

    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Szakdolgozat\Merfoldko", mappedBy="user")
     *
     * @var \Doctrine\Common\Collections\Collection $userMerfoldko
     */
    private $userMerfoldko;

    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Szakdolgozat\Megjegyzes", mappedBy="user")
     *
     * @var \Doctrine\Common\Collections\Collection $userMegjegyzes
     */
    private $userMegjegyzes;

    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Szakdolgozat\File", mappedBy="user")
     *
     * @var \Doctrine\Common\Collections\Collection $userFile
     */
    private $userFile;

    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Szakdolgozat\KonzultacioFelhasznalo", mappedBy="user")
     *
     * @var \Doctrine\Common\Collections\Collection $userKonzultacioFelhasznalo
     */
    private $userKonzultacioFelhasznalo;

    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Bizottsag\BizottsagTag", mappedBy="user")
     *
     * @var \Doctrine\Common\Collections\Collection $userBizottsagTag
     */
    private $userBizottsagTag;

    public function __construct()
    {
        parent::__construct();
        // your own logic
    }


    /**
     * Set name
     *
     * @param string $name
     * @return User
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set hallgatoiTorzskonyviSzam
     *
     * @param string $hallgatoiTorzskonyviSzam
     * @return User
     */
    public function setHallgatoiTorzskonyviSzam($hallgatoiTorzskonyviSzam)
    {
        $this->hallgatoiTorzskonyviSzam = $hallgatoiTorzskonyviSzam;

        return $this;
    }

    /**
     * Get hallgatoiTorzskonyviSzam
     *
     * @return string 
     */
    public function getHallgatoiTorzskonyviSzam()
    {
        return $this->hallgatoiTorzskonyviSzam;
    }

    /**
     * Set phoneNumber
     *
     * @param string $phoneNumber
     * @return User
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;

        return $this;
    }

    /**
     * Get phoneNumber
     *
     * @return string 
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * Set emailSummary
     *
     * @param boolean $emailSummary
     * @return User
     */
    public function setEmailSummary($emailSummary)
    {
        $this->emailSummary = $emailSummary;

        return $this;
    }

    /**
     * Get emailSummary
     *
     * @return boolean 
     */
    public function getEmailSummary()
    {
        return $this->emailSummary;
    }

    /**
     * Set emailSummaryTime
     *
     * @param \DateTime $emailSummaryTime
     * @return User
     */
    public function setEmailSummaryTime($emailSummaryTime)
    {
        $this->emailSummaryTime = $emailSummaryTime;

        return $this;
    }

    /**
     * Get emailSummaryTime
     *
     * @return \DateTime 
     */
    public function getEmailSummaryTime()
    {
        return $this->emailSummaryTime;
    }

    /**
     * Set status
     *
     * @param boolean $status
     * @return User
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return boolean 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set kar
     *
     * @param \AppBundle\Entity\Intezmeny\Kar $kar
     * @return User
     */
    public function setKar(\AppBundle\Entity\Intezmeny\Kar $kar = null)
    {
        $this->kar = $kar;

        return $this;
    }

    /**
     * Get kar
     *
     * @return \AppBundle\Entity\Intezmeny\Kar 
     */
    public function getKar()
    {
        return $this->kar;
    }

    /**
     * Set role
     *
     * @param \AppBundle\Entity\Felhasznalo\Role $role
     * @return User
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

    /**
     * Set targy
     *
     * @param \AppBundle\Entity\Intezmeny\Targy $targy
     * @return User
     */
    public function setTargy(\AppBundle\Entity\Intezmeny\Targy $targy = null)
    {
        $this->targy = $targy;

        return $this;
    }

    /**
     * Get targy
     *
     * @return \AppBundle\Entity\Intezmeny\Targy 
     */
    public function getTargy()
    {
        return $this->targy;
    }

    /**
     * Add userFelhasznaloTargyEletut
     *
     * @param \AppBundle\Entity\Felhasznalo\FelhasznaloTargyEletut $userFelhasznaloTargyEletut
     * @return User
     */
    public function addUserFelhasznaloTargyEletut(\AppBundle\Entity\Felhasznalo\FelhasznaloTargyEletut $userFelhasznaloTargyEletut)
    {
        $this->userFelhasznaloTargyEletut[] = $userFelhasznaloTargyEletut;

        return $this;
    }

    /**
     * Remove userFelhasznaloTargyEletut
     *
     * @param \AppBundle\Entity\Felhasznalo\FelhasznaloTargyEletut $userFelhasznaloTargyEletut
     */
    public function removeUserFelhasznaloTargyEletut(\AppBundle\Entity\Felhasznalo\FelhasznaloTargyEletut $userFelhasznaloTargyEletut)
    {
        $this->userFelhasznaloTargyEletut->removeElement($userFelhasznaloTargyEletut);
    }

    /**
     * Get userFelhasznaloTargyEletut
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getUserFelhasznaloTargyEletut()
    {
        return $this->userFelhasznaloTargyEletut;
    }

    /**
     * Add userLevelkuldo
     *
     * @param \AppBundle\Entity\Felhasznalo\Levelkuldo $userLevelkuldo
     * @return User
     */
    public function addUserLevelkuldo(\AppBundle\Entity\Felhasznalo\Levelkuldo $userLevelkuldo)
    {
        $this->userLevelkuldo[] = $userLevelkuldo;

        return $this;
    }

    /**
     * Remove userLevelkuldo
     *
     * @param \AppBundle\Entity\Felhasznalo\Levelkuldo $userLevelkuldo
     */
    public function removeUserLevelkuldo(\AppBundle\Entity\Felhasznalo\Levelkuldo $userLevelkuldo)
    {
        $this->userLevelkuldo->removeElement($userLevelkuldo);
    }

    /**
     * Get userLevelkuldo
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getUserLevelkuldo()
    {
        return $this->userLevelkuldo;
    }

    /**
     * Add userSzakirany
     *
     * @param \AppBundle\Entity\Intezmeny\Szakirany $userSzakirany
     * @return User
     */
    public function addUserSzakirany(\AppBundle\Entity\Intezmeny\Szakirany $userSzakirany)
    {
        $this->userSzakirany[] = $userSzakirany;

        return $this;
    }

    /**
     * Remove userSzakirany
     *
     * @param \AppBundle\Entity\Intezmeny\Szakirany $userSzakirany
     */
    public function removeUserSzakirany(\AppBundle\Entity\Intezmeny\Szakirany $userSzakirany)
    {
        $this->userSzakirany->removeElement($userSzakirany);
    }

    /**
     * Get userSzakirany
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getUserSzakirany()
    {
        return $this->userSzakirany;
    }

    /**
     * Add userKapcsolat
     *
     * @param \AppBundle\Entity\Szakdolgozat\SzakdolgozatFelhasznaloKapcsolat $userKapcsolat
     * @return User
     */
    public function addUserKapcsolat(\AppBundle\Entity\Szakdolgozat\SzakdolgozatFelhasznaloKapcsolat $userKapcsolat)
    {
        $this->userKapcsolat[] = $userKapcsolat;

        return $this;
    }

    /**
     * Remove userKapcsolat
     *
     * @param \AppBundle\Entity\Szakdolgozat\SzakdolgozatFelhasznaloKapcsolat $userKapcsolat
     */
    public function removeUserKapcsolat(\AppBundle\Entity\Szakdolgozat\SzakdolgozatFelhasznaloKapcsolat $userKapcsolat)
    {
        $this->userKapcsolat->removeElement($userKapcsolat);
    }

    /**
     * Get userKapcsolat
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getUserKapcsolat()
    {
        return $this->userKapcsolat;
    }

    /**
     * Add userKulsoCeg
     *
     * @param \AppBundle\Entity\Felhasznalo\KulsoCeg $userKulsoCeg
     * @return User
     */
    public function addUserKulsoCeg(\AppBundle\Entity\Felhasznalo\KulsoCeg $userKulsoCeg)
    {
        $this->userKulsoCeg[] = $userKulsoCeg;

        return $this;
    }

    /**
     * Remove userKulsoCeg
     *
     * @param \AppBundle\Entity\Felhasznalo\KulsoCeg $userKulsoCeg
     */
    public function removeUserKulsoCeg(\AppBundle\Entity\Felhasznalo\KulsoCeg $userKulsoCeg)
    {
        $this->userKulsoCeg->removeElement($userKulsoCeg);
    }

    /**
     * Get userKulsoCeg
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getUserKulsoCeg()
    {
        return $this->userKulsoCeg;
    }

    /**
     * Add userKonzultacio
     *
     * @param \AppBundle\Entity\Szakdolgozat\Konzultacio $userKonzultacio
     * @return User
     */
    public function addUserKonzultacio(\AppBundle\Entity\Szakdolgozat\Konzultacio $userKonzultacio)
    {
        $this->userKonzultacio[] = $userKonzultacio;

        return $this;
    }

    /**
     * Remove userKonzultacio
     *
     * @param \AppBundle\Entity\Szakdolgozat\Konzultacio $userKonzultacio
     */
    public function removeUserKonzultacio(\AppBundle\Entity\Szakdolgozat\Konzultacio $userKonzultacio)
    {
        $this->userKonzultacio->removeElement($userKonzultacio);
    }

    /**
     * Get userKonzultacio
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getUserKonzultacio()
    {
        return $this->userKonzultacio;
    }

    /**
     * Add userMerfoldko
     *
     * @param \AppBundle\Entity\Szakdolgozat\Merfoldko $userMerfoldko
     * @return User
     */
    public function addUserMerfoldko(\AppBundle\Entity\Szakdolgozat\Merfoldko $userMerfoldko)
    {
        $this->userMerfoldko[] = $userMerfoldko;

        return $this;
    }

    /**
     * Remove userMerfoldko
     *
     * @param \AppBundle\Entity\Szakdolgozat\Merfoldko $userMerfoldko
     */
    public function removeUserMerfoldko(\AppBundle\Entity\Szakdolgozat\Merfoldko $userMerfoldko)
    {
        $this->userMerfoldko->removeElement($userMerfoldko);
    }

    /**
     * Get userMerfoldko
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getUserMerfoldko()
    {
        return $this->userMerfoldko;
    }

    /**
     * Add userMegjegyzes
     *
     * @param \AppBundle\Entity\Szakdolgozat\Megjegyzes $userMegjegyzes
     * @return User
     */
    public function addUserMegjegyze(\AppBundle\Entity\Szakdolgozat\Megjegyzes $userMegjegyzes)
    {
        $this->userMegjegyzes[] = $userMegjegyzes;

        return $this;
    }

    /**
     * Remove userMegjegyzes
     *
     * @param \AppBundle\Entity\Szakdolgozat\Megjegyzes $userMegjegyzes
     */
    public function removeUserMegjegyze(\AppBundle\Entity\Szakdolgozat\Megjegyzes $userMegjegyzes)
    {
        $this->userMegjegyzes->removeElement($userMegjegyzes);
    }

    /**
     * Get userMegjegyzes
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getUserMegjegyzes()
    {
        return $this->userMegjegyzes;
    }

    /**
     * Add userFile
     *
     * @param \AppBundle\Entity\Szakdolgozat\File $userFile
     * @return User
     */
    public function addUserFile(\AppBundle\Entity\Szakdolgozat\File $userFile)
    {
        $this->userFile[] = $userFile;

        return $this;
    }

    /**
     * Remove userFile
     *
     * @param \AppBundle\Entity\Szakdolgozat\File $userFile
     */
    public function removeUserFile(\AppBundle\Entity\Szakdolgozat\File $userFile)
    {
        $this->userFile->removeElement($userFile);
    }

    /**
     * Get userFile
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getUserFile()
    {
        return $this->userFile;
    }

    /**
     * Add userKonzultacioFelhasznalo
     *
     * @param \AppBundle\Entity\Szakdolgozat\KonzultacioFelhasznalo $userKonzultacioFelhasznalo
     * @return User
     */
    public function addUserKonzultacioFelhasznalo(\AppBundle\Entity\Szakdolgozat\KonzultacioFelhasznalo $userKonzultacioFelhasznalo)
    {
        $this->userKonzultacioFelhasznalo[] = $userKonzultacioFelhasznalo;

        return $this;
    }

    /**
     * Remove userKonzultacioFelhasznalo
     *
     * @param \AppBundle\Entity\Szakdolgozat\KonzultacioFelhasznalo $userKonzultacioFelhasznalo
     */
    public function removeUserKonzultacioFelhasznalo(\AppBundle\Entity\Szakdolgozat\KonzultacioFelhasznalo $userKonzultacioFelhasznalo)
    {
        $this->userKonzultacioFelhasznalo->removeElement($userKonzultacioFelhasznalo);
    }

    /**
     * Get userKonzultacioFelhasznalo
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getUserKonzultacioFelhasznalo()
    {
        return $this->userKonzultacioFelhasznalo;
    }

    /**
     * Add userBizottsagTag
     *
     * @param \AppBundle\Entity\Bizottsag\BizottsagTag $userBizottsagTag
     * @return User
     */
    public function addUserBizottsagTag(\AppBundle\Entity\Bizottsag\BizottsagTag $userBizottsagTag)
    {
        $this->userBizottsagTag[] = $userBizottsagTag;

        return $this;
    }

    /**
     * Remove userBizottsagTag
     *
     * @param \AppBundle\Entity\Bizottsag\BizottsagTag $userBizottsagTag
     */
    public function removeUserBizottsagTag(\AppBundle\Entity\Bizottsag\BizottsagTag $userBizottsagTag)
    {
        $this->userBizottsagTag->removeElement($userBizottsagTag);
    }

    /**
     * Get userBizottsagTag
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getUserBizottsagTag()
    {
        return $this->userBizottsagTag;
    }

    /**
     * Set userSzakirany
     *
     * @param \AppBundle\Entity\Intezmeny\Szakirany $userSzakirany
     * @return User
     */
    public function setUserSzakirany(\AppBundle\Entity\Intezmeny\Szakirany $userSzakirany = null)
    {
        $this->userSzakirany = $userSzakirany;

        return $this;
    }
}
