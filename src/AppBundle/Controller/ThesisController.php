<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ThesisController extends Controller
{
    /**
     * @Route("/thesis_show", name="thesis_show")
     */
    public function thesisShow()
    {
        return $this->render("thesis_list.html.twig");
    }
}