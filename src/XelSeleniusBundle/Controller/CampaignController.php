<?php

namespace XelSeleniusBundle\Controller;

use function PHPSTORM_META\type;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use XelSeleniusBundle\Entity\Building;

class CampaignController extends Controller
{
    private function generatePlanetBuildings($planetId, $types,$planet,$typeId)
    {

        foreach ($types as $type) {
            $building = new Building();

            $building_type = $this->getDoctrine()->getRepository('XelSeleniusBundle:Building_Type')
                ->findOneBy(['id' => $type]);


            $building->setType($type);
            $building->setTypeId($type->getId());
            $building->setLevel(0);
            $building->setReqMinerals($building_type->getReqMinerals());
            $building->setReqHydrogen($building_type->getReqHydrogen());
            $building->setReqTime($building_type->getReqTime());
            $building->setFinishedOn(date("Y-m-d H:i:s", time() + strtotime($building->getReqTime())));
            $building->setPlanet($planet);
            $em = $this->getDoctrine()->getManager();
            $em->persist($building);
            $em->flush();
        }
    }

    /**
     * @Route("/universe",name="campaign")
     * @return \Symfony\Component\HttpFoundation\Response
     * @Security("has_role('ROLE_USER')")
     */
    public function indexAction()
    {
//        $planet = $this->getDoctrine()->getRepository('XelSeleniusBundle:Planet')->findOneBy(['user' => $this->getUser()]);
//        $types = $this->getDoctrine()->getRepository('XelSeleniusBundle:Building_Type')->findAll();
//        $typeId=array();
//        foreach ($types as $type) {
//            $typeId[] = $type->getId();
//        }
//        $planetId = $planet->getId();
//
//        $this->generatePlanetBuildings($planetId, $types,$planet,$typeId);
        return $this->render('universe/campaign.html.twig');
    }
}
