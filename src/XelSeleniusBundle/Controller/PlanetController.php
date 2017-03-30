<?php

namespace XelSeleniusBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PlanetController extends Controller
{
    /**
     * @Route("/overview")
    */
    public function PlanetOverview()
    {
        return $this->render('planet/overview.html.twig');
    }
}
