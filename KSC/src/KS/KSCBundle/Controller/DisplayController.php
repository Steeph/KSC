<?php

namespace KS\KSCBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;

class DisplayController extends Controller
{
    public function indexAction()
    {
    	return $this->render('KSBundle:Default:index.html.twig');
    }

    public function playAction()
    {
    	return $this->render('KSBundle:Default:play.html.twig');
    }

    public function creationAction()
    {
    	return $this->render('KSBundle:Default:creation.html.twig');
    }

    public function connectionAction()
    {
    	return $this->render('KSBundle:Default:connection.html.twig');
    }

     public function profilAction()
    {
    	return $this->render('KSBundle:Default:profil.html.twig');
    }

     public function contactAction()
    {
    	return $this->render('KSBundle:Default:contact.html.twig');
    	
    }


}
