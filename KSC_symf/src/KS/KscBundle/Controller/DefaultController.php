<?php

namespace KS\KscBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('KSKscBundle:Default:index.html.twig', array('name' => $name));
    }
}
