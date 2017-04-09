<?php

namespace XelSeleniusBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


use Symfony\Component\HttpFoundation\Request;
use XelSeleniusBundle\Entity\Role;
use XelSeleniusBundle\Entity\User;
use XelSeleniusBundle\Form\UserRegistration;

class AccountController extends Controller
{
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
        if ($form->isSubmitted()) {
            //Encrypting password
            $encryptedPassword = $encoder->encodePassword(
                $user,
                $user->getPassword()
            );
            $user->setPassword($encryptedPassword);

            //Setting role
            $userRole=$this->getDoctrine()->getRepository(Role::class)
                ->findOneBy(['name'=>'ROLE_USER']);
            $user->addRole($userRole);
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            return $this->redirectToRoute('home');

        }
        return $this->render('authentication/register.html.twig');
    }

    /**
     * @Route("/profile", name="profile")
     */
    public function profileOverview()
    {
        return $this->render('account/profile.html.twig');
    }
}
