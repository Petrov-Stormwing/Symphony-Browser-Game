<?php

namespace XelSeleniusBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ShipsController extends Controller
{
    /**
     * @Route("/shipyard",name="shipyard")
     */
    public function shipyardOverview()
    {
        return $this->render('universe/planet/shipyard.html.twig');
    }

    /**
     * @Route("/fleet",name="fleet")
     */
    public function fleetOverview()
    {
        return $this->render('universe/planet/fleet.html.twig');
    }
}
