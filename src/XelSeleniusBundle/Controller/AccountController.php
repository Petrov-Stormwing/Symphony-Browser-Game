<?php

namespace XelSeleniusBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AccountController extends Controller
{
    /**
     * @Route("/profile", name="profile")
     */
    public function profileOverview()
    {
        return $this->render('accounting/register.html.twig');
    }

    /**
     * @Route("/login", name="login")
     */
    public function loginForm()
    {
        return $this->render('accounting/login.html.twig');
    }

    /**
     * @Route("/register", name="register")
     */
    public function registerForm()
    {
        return $this->render('accounting/register.html.twig');
    }

}
