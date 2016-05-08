<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Szakdolgozat\Szakdolgozat;
use AppBundle\Entity\Szakdolgozat\SzakdolgozatFelhasznaloKapcsolat;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Form\Type\TemaFormType;

class TemaController extends Controller
{
    /**
     * @Route("/new_tema", name="new_tema")
     */
    public function createNewTema(Request $request)
    {
        $szakdolgozat = new Szakdolgozat();

        $form = $this->createForm(new TemaFormType(), $szakdolgozat);
        $form->handleRequest($request);

        if ($form->isValid()) {
            if (date("m") < 9) {
                $kiirasEve = (date("Y") - 1) . "/" . (date("y")) . "/2";
                $szakdolgozat->setBeadasHatarido(new \DateTime("+2 year -" . (date('m') - 1) . "month"));
            } else {
                $kiirasEve = (date("Y")) . "/" . (date("y") + 1) . "/1";
                $szakdolgozat->setBeadasHatarido(new \DateTime("+2 year -" . (date('m') - 9) . "month"));
            }
            $szakdolgozat->setKiirasEve($kiirasEve);
            $szakdolgozat->setAllapot("Feldolgozas alatt");
            $szakdolgozat->setStatus(0);

            $em = $this->getDoctrine()->getManager();

            $kapcsolat = new SzakdolgozatFelhasznaloKapcsolat();
            $kapcsolat->setSzakdolgozat($szakdolgozat);
            $kapcsolat->setUser($this->getUser());
            $kapcsolat->setViszony($this->getUser()->getRole()->getName());
            $kapcsolat->setAllapot(1);
            $kapcsolat->setPeldany(1);
            $kapcsolat->setStatus(0);

            $em->persist($szakdolgozat);
            $em->persist($kapcsolat);
            $em->flush();

        }

        return $this->render(":Tema:temaForm.html.twig", array(
            "szakdolgozat" => $form->createView()
        ));
    }
}