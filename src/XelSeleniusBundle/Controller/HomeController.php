<?php

namespace XelSeleniusBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller
{
    /**
     * @Route("/",name="home")
    */
    public function homepageOverview()
    {
        return $this->render('default/homepage.html.twig');
    }

    /**
     * @Route("/rules",name="rules")
     */
    public function staticRules()
    {
        return $this->render('features/rules.html.twig');
    }

    /**
     * @Route("/about",name="about")
     */
    public function staticAbout()
    {
        return $this->render('features/about.html.twig');
    }
}
