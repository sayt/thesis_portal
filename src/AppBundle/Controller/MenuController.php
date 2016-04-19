<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MenuController extends Controller
{
    public function menuAction()
    {
        $menus = array(
            array(
                "name" => "Főoldal",
                "link" => "homepage",
                "role" => array("null")
            ),
            array(
                "name" => "Profil",
                "link" => "homepage",
                "role" => array("ROLE_HALLGATO", "ROLE_OKTATO")
            ),
            array(
                "name" => "Téma",
                "link" => "homepage",
                "role" => array("ROLE_HALLGATO", "ROLE_OKTATO")
            ),
            array(
                "name" => "Téma jelentkezés",
                "link" => "homepage",
                "role" => array("ROLE_HALLGATO")
            ),
            array(
                "name" => "Téma kiírás",
                "link" => "homepage",
                "role" => array("ROLE_HALLGATO", "ROLE_OKTATO")
            ),
            array(
                "name" => "Jelentkezett / kiírt téma",
                "link" => "homepage",
                "role" => array("ROLE_HALLGATO")
            ),
            array(
                "name" => "Felkért téma",
                "link" => "homepage",
                "role" => array("ROLE_OKTATO")
            ),
            array(
                "name" => "Saját szakdolgozat",
                "link" => "homepage",
                "role" => array("ROLE_HALLGATO")
            ),
            array(
                "name" => "Saját szakdolgozatok",
                "link" => "homepage",
                "role" => array("ROLE_OKTATO")
            ),
            array(
                "name" => "Bizottság",
                "link" => "homepage",
                "role" => array("ROLE_OKTATO")
            ),
            array(
                "name" => "Szakdolgozat",
                "link" => "homepage",
                "role" => array("null")
            ),
            array(
                "name" => "Dokumentáció",
                "link" => "homepage",
                "role" => array("null")
            ),
        );
        return $this->render("menu.html.twig", array(
            "menus" => $menus
        ));
    }
}