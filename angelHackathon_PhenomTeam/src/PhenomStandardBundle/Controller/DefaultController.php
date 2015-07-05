<?php

namespace PhenomStandardBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('PhenomStandardBundle:Default:index.html.twig', array('name' => $name));
    }
}
