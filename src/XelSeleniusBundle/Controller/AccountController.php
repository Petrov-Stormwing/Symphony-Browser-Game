<?php

namespace XelSeleniusBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use XelSeleniusBundle\Entity\Planet;
use XelSeleniusBundle\Entity\Role;
use XelSeleniusBundle\Entity\User;
use XelSeleniusBundle\Form\UserRegistration;

class AccountController extends Controller
{
    private function planetGenerator($user)
    {
        $planet = new Planet();
        $planet->setSize(intval(rand(6000, 32000)));

        //generate all planet objects with initial value
        $planet->setBuildingsLevel(
            json_encode(
                array(
                    'Mining Facility' => 0,
                    'Hydrogen Extractor' => 0,
                    'Shipyard' => 0,
                )
            )
        );

        $planet->setShips(
            json_encode(
                array(
                    'Fighter' => 0,
                    'Cruiser' => 0,
                    'Battleship' => 0,
                    'Cargo_ship' => 0,
                    'Colonizer' => 0
                )
            )
        );

        $planet->setStorage(
            json_encode(
                array(
                    'Minerals Storage' => 10000,
                    'Hydrogen Tanks' => 10000
                )
            )
        );

        $planet->setYield(
            json_encode(
                array(
                    'Minerals_per_hour' => 100,
                    'Hydrogen_per_hour' => 100
                )
            )
        );

        $planet->setCoordinates(
            json_encode(
                array(
                    'x' => rand(0, 20),
                    'y' => rand(0, 20)
                )
            )
        );

        //set userId
        $planet->setUser($user);

        //Persist into Database
        $em = $this->getDoctrine()->getManager();
        $em->persist($planet);
        $em->flush();

        return $planet;
    }

    /**
     * @Route("/register", name="user_register_form")
     * @Method("GET")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function register()
    {
        $form = $this->createForm(UserRegistration::class);
        return $this->render('authentication/register.html.twig', ['form' => $form->createView()]);
    }

    /**
     * @Route("/register", name="register_process")
     * @Method("POST")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function registerProcess(Request $request)
    {
        $user = new User();
        $form = $this->createForm(UserRegistration::class, $user);
        $form->handleRequest($request);
        $encoder = $this->get('security.password_encoder');
        if ($form->isValid()) {
            //Encrypting password
            $encryptedPassword = $encoder->encodePassword(
                $user,
                $user->getPassword()
            );
            $user->setPassword($encryptedPassword);

            //Setting role
            $userRole = $this->getDoctrine()->getRepository(Role::class)
                ->findOneBy(['name' => 'ROLE_USER']);
            $user->addRole($userRole);

            //Persist into Database
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            //set User's Planet
            $user->setPlanet($this->planetGenerator($user));

            $this->addFlash('success', 'Registration Successful!');

            return $this->redirectToRoute('home');

        }
        return $this->render('authentication/register.html.twig', ['form' => $form->createView()]);
    }

    /**
     * @Route("/profile", name="profile")
     */
    public function profileOverview()
    {
        return $this->render('account/profile.html.twig');
    }
}
