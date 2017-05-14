<?php

namespace UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class SecurityController extends Controller
{

    public function loginAction()
    {

        $authenticationUtils = $this->get('security.authentication_utils');

        return $this->render('UserBundle:Security:login.html.twig', [
            'last_username' => $authenticationUtils->getLastUsername(),
            'error'         => $authenticationUtils->getLastAuthenticationError(),
        ]);

    }

    public function loginCheckAction()
    {
        // will never be executed
    }

    public function mainAction()
    {

//        var_dump('GGGGGGGGGGGGGGGGGG');
//        exit;
//        return $this->render('UserBundle:Security:main.html.twig');
        return new Response('<h1>Hello</h1>');

    }

}
