<?php

namespace eStore\StoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('eStoreStoreBundle:Default:index.html.twig');
    }
}
