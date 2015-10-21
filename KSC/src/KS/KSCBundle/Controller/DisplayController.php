<?php

namespace KS\KSCBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;

class DisplayController extends Controller
{
    public function indexAction()
    {
    	$index = $this->get('templating')->render('KSBundle:Default:index.html.twig');
    	return new Response($index);

    }

    public function playAction()
    {
    	$play = $this->get('templating')->render('KSBundle:Default:play.html.twig');
    	return new Response($play);

    }

    public function creationAction()
    {
    	$creation = $this->get('templating')->render('KSBundle:Default:play.html.twig');
    	return new Response($creation);
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
