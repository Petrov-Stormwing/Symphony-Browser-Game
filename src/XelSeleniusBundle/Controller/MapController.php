<?php

namespace XelSeleniusBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\User\User;
use XelSeleniusBundle\Entity\Planet;
use XelSeleniusBundle\XelSeleniusBundle;


class MapController extends Controller
{
    /**
     * @Route("/map",name="map_view")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function mapView()
    {
        $planets = $this->getDoctrine()->getRepository('XelSeleniusBundle:Planet')->findAll();
        $planet_matrix = [];

        //Generating matrix[21][21] filled with 0
        for ($row = 0; $row <= 20; $row++) {
            $planet_matrix[$row] = array();
            for ($col = 0; $col <= 20; $col++) {
                $planet_matrix[$row][$col] = null;
            }
        }

        foreach ($planets as $coordinates) {
            $planet = $coordinates->getCoordinates();
            $planet_assoc = json_decode($planet, true);
            $planet_matrix[$planet_assoc['x']][$planet_assoc['y']] = $coordinates;
        }

        $currentUser=$this->getUser();

        return $this->render('universe/universe.html.twig',['planet_matrix'=>$planet_matrix, 'user'=>$currentUser]);
    }

    public function mapDynamics()
    {

    }
}
