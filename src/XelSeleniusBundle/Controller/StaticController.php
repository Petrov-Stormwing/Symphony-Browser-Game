<?php

namespace XelSeleniusBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class StaticController extends Controller
{
    /**
     * @Route("/about", name="about")
    */
    public function aboutOverviewStatic()
    {
        return $this->render('features/about.html.twig');
    }

    /**
     * @Route("/rules", name="rules")
     */
    public function rulesOverview()
    {
        return $this->render('features/rules.html.twig');
    }
}
