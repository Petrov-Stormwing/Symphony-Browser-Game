<?php

namespace XelSeleniusBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CampainController extends Controller
{
    /**
     * @Route("/universe",name="campaign")
     * @param $name
     * @return \Symfony\Component\HttpFoundation\Response
     *
     */
    public function indexAction()
    {
        return $this->render('universe/campaign.html.twig');
    }
}
