<?php

namespace KS\SVBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('KSSVBundle:Default:index.html.twig');
    }

    public function competencesAction()
    {
    	return $this->render('KSSVBundle:Default:competences.html.twig');
    }

    public function projetAction()
    {
    	return $this->render('KSSVBundle:Default:projet.html.twig');
    }

    public function contactAction() {
        return $this->render('KSSVBundle:Default:contact.html.twig');
    }
}
