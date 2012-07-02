<?php

namespace cnct\userBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction($name)
    {
        return $this->render('cnctuserBundle:Default:index.html.twig', array('name' => $name));
    }
}
