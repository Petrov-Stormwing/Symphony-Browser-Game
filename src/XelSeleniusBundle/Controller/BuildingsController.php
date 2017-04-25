<?php

namespace XelSeleniusBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BuildingsController extends Controller
{
    /**
     * @Route("buildings",name="buildings")
     * @Security("has_role('ROLE_USER')")
     */
    public function buildingsOverview()
    {
        //Displays the current resources from the current planet.
        $planet = $this->getDoctrine()->getRepository('XelSeleniusBundle:Planet')
            ->findOneBy(['user' => $this->getUser()]);

        $storage=$planet->getStorage();
        $buildings=$planet->getBuildings();

        var_dump($buildings);
        exit;
        $decodedStorage=json_decode($storage,true);
        $minerals=intval($decodedStorage['Minerals_Storage']);
        $hydrogen=intval($decodedStorage['Hydrogen_Tanks']);

        return $this->render('universe/planet/buildings.html.twig',
            ['Minerals'=>$minerals, 'Hydrogen'=>$hydrogen]);
    }
}
