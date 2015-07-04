<?php

namespace Phenom\AuthenticateBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('PhenomAuthenticateBundle:Default:index.html.twig', array('name' => $name));
    }
}
