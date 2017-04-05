<?php

namespace XelSeleniusBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BuildingsController extends Controller
{
    /**
     * @Route("buildings",name="buildings")
     */
    public function buildingsOverview()
    {
        return $this->render('planet/buildings.html.twig');
    }
}
