<?php

namespace XelSeleniusBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use XelSeleniusBundle\Entity\Buildings;
use XelSeleniusBundle\Entity\Planet;

class PlanetController extends Controller
{
    public function resourcesUpdate($storage,$yield)
    {
        //decode to use
        $yield_assoc=json_decode($yield,true);
        $storage_assoc=json_decode($storage,true);

        //add yield per second - 3600, per minute - 60, per hour - 1
        $storage_assoc['Minerals_Storage']+=($yield_assoc['Minerals_per_hour']/3600);
        $storage_assoc['Hydrogen_Tanks']+= ($yield_assoc['Hydrogen_per_hour']/3600);

        //encode and return the data
        return json_encode($storage_assoc);
    }

    public function yieldUpdate($yield,$buildings)
    {
        //decode to use
        $yield_assoc=json_decode($yield,true);
        $buildings_assoc=json_decode($buildings,true);

        //switch to get the hardcoded values -> to be upgraded in future
        switch ($buildings_assoc['Mining_Facility']){
            case 0:$yield_assoc['Minerals_per_hour']=50;break;
            case 1:$yield_assoc['Minerals_per_hour']=50+Buildings::MINING_FACILITY_LEVEL_1[3];break;
            case 2:$yield_assoc['Minerals_per_hour']=50+Buildings::MINING_FACILITY_LEVEL_2[3];break;
            case 3:$yield_assoc['Minerals_per_hour']=50+Buildings::MINING_FACILITY_LEVEL_3[3];break;
        }
        switch ($buildings_assoc['Hydrogen_Extractor']){
            case 0:$yield_assoc['Hydrogen_per_hour']=25;break;
            case 1:$yield_assoc['Hydrogen_per_hour']=25+Buildings::HYDROGEN_EXTRACTOR_LEVEL_1[3];break;
            case 2:$yield_assoc['Hydrogen_per_hour']=25+Buildings::HYDROGEN_EXTRACTOR_LEVEL_2[3];break;
            case 3:$yield_assoc['Hydrogen_per_hour']=25+Buildings::HYDROGEN_EXTRACTOR_LEVEL_3[3];break;
        }

        //encode and return the data.
        return json_encode($yield_assoc);
    }

    /**
     * @Route("/overview", name="overview")
     * @Security("has_role('ROLE_USER')")
     */
    public function planetUpdate()
    {
        $planet = $this->getDoctrine()->getRepository('XelSeleniusBundle:Planet')
            ->findOneBy(['user' => $this->getUser()]);

        //get planet data
        $storage=$planet->getStorage();
        $yield=$planet->getYield();
        $buildings=$planet->getBuildingsLevel();

        //update planet data
        $planet->setStorage($this->resourcesUpdate($storage,$yield));
        $planet->setYield($this->yieldUpdate($yield,$buildings));

        //flush planet into db
        $em=$this->getDoctrine()->getManager();
        $em->persist($planet);
        $em->flush();

        //render this into twig
        $decodedStorage=json_decode($storage,true);
        $minerals=intval($decodedStorage['Minerals_Storage']);
        $hydrogen=intval($decodedStorage['Hydrogen_Tanks']);

        return $this->render('universe/planet/overview.html.twig',
            ['Minerals'=>$minerals, 'Hydrogen'=>$hydrogen]);
    }
}
