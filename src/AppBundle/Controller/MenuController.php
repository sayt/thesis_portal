<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Felhasznalo\User;
use Symfony\Component\Security\Core\Role\Role;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MenuController extends Controller
{
    public function menuAction()
    {
       /* if (!is_granted("IS_AUTHENTICATED_REMEMBERED"))
        {*/
            $menus = array(
                array(
                    "name" => "Főoldal",
                    "link" => "homepage"
                ),
                array(
                    "name" => "Szakdolgozat",
                    "link" => "homepage"
                ),
                array(
                    "name" => "Dokumentáció",
                    "link" => "homepage"
                ));
                /*
                array(
                    "name" => "",
                    "link" => ""
                ),
            );
        }
        else
        {
            $menus = array(
                array(
                    "name" => "Főoldal",
                    "link" => "#"
                ),
                array(
                    "name" => "Szakdolgozat",
                    "link" => "#"
                ),
                array(
                    "name" => "Dokumentáció",
                    "link" => "#"
                ),
                array(
                    "name" => "Profil",
                    "link" => "#"
                ),
                array(
                    "name" => "Téma",
                    "link" => "#"
                ),
                array(
                    "name" => "Saját téma",
                    "link" => "#"
                ),
                /*array(
                    "name" => "",
                    "link" => ""
                ),
            );
        }*/

        return $this->render("menu.html.twig", array(
            "menus" => $menus
        ));
    }
}