<?php

namespace UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use UserBundle\Entity\User;
use UserBundle\Form\UserType;

class RegistrationController extends Controller
{

    public function registerAction(Request $request)
    {

        $oUser = new User();
        $form = $this->createForm(UserType::class, $oUser);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $sPassword = $this->get('security.password_encoder')->encodePassword($oUser, $oUser->getPlainPassword());
            $oUser->setPassword($sPassword);

            $em = $this->getDoctrine()->getManager();
            $em->persist($oUser);
            $em->flush();

            return $this->redirectToRoute('login');
        }

        return $this->render(
            'UserBundle:Registration:register.html.twig',
            ['form' => $form->createView()]
        );

    }

}
