<?php

namespace cnct\facpBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction($name)
    {
        return $this->render('cnctfacpBundle:Default:index.html.twig', array('name' => $name));
    }
}
