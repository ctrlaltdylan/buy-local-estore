<?php

namespace eStore\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BlogController extends Controller
{
    public function newAction()
    {

    	$form = $this->createForm(new PostType(), $post);
    	
        return $this->render('eStoreBlogBundle:Blog:new.html.twig');
    }

}