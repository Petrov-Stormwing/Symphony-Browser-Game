<?php

namespace XelSeleniusBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SecurityController extends Controller
{
    /**
     * @Route("/login",name="login")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function login()
    {
        return $this->render('authentication/login.html.twig');
    }

    /**
     * @Route("/logout", name="logout")
     */
    public function logout()
    {

    }

    /**
     * @Route("/logoutNotify",name="logoutNotify")
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     *
     */
    public function logoutNotify(){
        $this->addFlash('success', 'You have logged out');
        return $this->redirectToRoute('logout');
    }
}
