<?php

namespace eStore\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('eStoreBlogBundle:Default:index.html.twig');
    }
}
