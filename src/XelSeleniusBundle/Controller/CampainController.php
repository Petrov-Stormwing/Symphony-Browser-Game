<?php

namespace XelSeleniusBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CampainController extends Controller
{
    /**
     * @Route("/universe",name="campaign")
     * @return \Symfony\Component\HttpFoundation\Response
     * @Security("has_role('ROLE_USER')")
     *
     */
    public function indexAction()
    {
        return $this->render('universe/campaign.html.twig');
    }
}
