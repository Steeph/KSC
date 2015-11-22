<?php

namespace KS\GameBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;

class DisplayController extends Controller
{
    public function indexAction()
    {
    	return $this->render('KSGameBundle:Default:index.html.twig');
    }

    public function playAction()
    {
    	return $this->render('KSGameBundle:Default:play.html.twig');
    }

    public function creationAction()
    {
    	return $this->render('KSGameBundle:Default:creation.html.twig');
    }

    public function connectionAction()
    {
    	return $this->render('KSGameBundle:Default:connection.html.twig');
    }

     public function profilAction()
    {
    	return $this->render('KSGameBundle:Default:profil.html.twig');
    }

     public function contactAction()
    {
    	return $this->render('KSGameBundle:Default:contact.html.twig');
    	
    }


}
