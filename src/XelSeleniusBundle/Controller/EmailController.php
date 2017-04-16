<?php

namespace XelSeleniusBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use XelSeleniusBundle\Entity\SupportTicket;
use XelSeleniusBundle\Form\SupportForm;

class EmailController extends Controller
{
    /**
     * @Route("/support", name="support_form")
     * @Method("GET")
     * @Security("is_granted('IS_AUTHENTICATED_FULLY')")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function support(Request $request)
    {
        $supportForm = $this->createForm(SupportForm::class);
        return $this->render('features/support.html.twig',['supportForm'=>$supportForm->createView()]);
    }

    /**
     * @Route("/support", name="supportTicket")
     * @Method("POST")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function supportTicket(Request $request)
    {
//      Instance the new class
        $supportTicket=new SupportTicket();
        $supportForm=$this->createForm(SupportForm::class, $supportTicket);

        $supportForm->handleRequest($request);

        if ($supportForm->isValid()) {

            $supportTicket->setUser($this->getUser());

//          flush the data into the database
            $em = $this->getDoctrine()->getManager();
            $em->persist($supportTicket);
            $em->flush();

            $this->addFlash('success', 'Ticket has been sent successfully');

            return $this->redirectToRoute('home');
        }
        return $this->render('features/support.html.twig');
    }
}
