<?php

namespace eStore\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('eStoreBlogBundle:Default:home.html.twig');
    }

    public function loginAction()
    {
    	return $this->render('eStoreBlogBundle:Auth:login.html.twig');
    }
}
