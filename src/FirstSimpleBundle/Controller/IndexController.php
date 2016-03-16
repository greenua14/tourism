<?php

namespace FirstSimpleBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class IndexController extends Controller
{

    /**
     * @Template("FirstSimpleBundle:Index:index.html.twig")
     */
    public function indexAction()
    {
        return ['name' => 'User'];
    }

}
