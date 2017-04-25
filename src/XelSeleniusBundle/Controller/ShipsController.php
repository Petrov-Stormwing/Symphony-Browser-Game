<?php

namespace XelSeleniusBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ShipsController extends Controller
{
    /**
     * @Route("/shipyard",name="shipyard")
     * @Security("has_role('ROLE_USER')")
     */
    public function shipyardOverview()
    {
        return $this->render('universe/planet/shipyard.html.twig');
    }

    /**
     * @Route("/fleet",name="fleet")
     * @Security("has_role('ROLE_USER')")
     */
    public function fleetOverview()
    {
        return $this->render('universe/planet/fleet.html.twig');
    }
}
