<?php

namespace Phenom\AuthenticateBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class OriginalLoginController extends Controller
{
    /**
     * @Route("/{name}", name="loginPage")
     */
    public function indexAction($name)
    {
        return $this->render('PhenomAuthenticateBundle:Default:index.html.twig', array('name' => $name));
    }
}
