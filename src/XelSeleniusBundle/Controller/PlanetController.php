<?php

namespace XelSeleniusBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PlanetController extends Controller
{
    /**
     * @Route("/overview", name="overview")
     * @Security("has_role('ROLE_USER')")
    */
    public function PlanetOverview()
    {
        return $this->render('universe/planet/overview.html.twig');
    }
}
