<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Validator\Constraints\DateTime;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $description = "Itt lesz majd egyszer egy leírás ami egy viszonylag hosszú szöveg";
        $links = array(
            array(
                "name" => "doksi1",
                "link" => "homepage"
            ),
            array(
                "name" => "doksi2",
                "link" => "homepage"
            ),
        );

        // replace this example code with whatever you need
        return $this->render('index.html.twig', array(
            "description" => $description,
            "links" => $links
        ));
    }
}
