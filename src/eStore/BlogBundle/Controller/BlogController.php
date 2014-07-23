<?php

namespace eStore\BlogBundle\Controller;

use Symfony\Component\HttpFoundation\Request;

use eStore\BlogBundle\Form\PostType;
use eStore\BlogBundle\Entity\Post;
use eStore\UserBundle\Entity\User;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class BlogController extends Controller
{
    public function newAction(Request $request)
    {
    	$post = new Post;
        
    	$form = $this->createForm(new PostType(), $post);
    	
    	$form->handleRequest($request);

    	if ($form->isValid()) {
    		//save to db 
            $user = $this->container->get('security.context')->getToken()->getUser();
            $post->setUser($user);          

    		$em = $this->getDoctrine()->getManager();
    		$em->persist($post);
            $em->persist($user);
    		$em->flush();

    		return $this->redirect($this->generateUrl('e_store_blog_posts'));
    	}

        return $this->render('eStoreBlogBundle:Blog:new.html.twig', array (
        		'form' => $form->createView()
        ));
    }

    public function postsAction()
    {

    	$repository = $this->getDoctrine()
    		->getRepository('eStoreBlogBundle:Post');

    	$posts = $repository->findAll();

    	return $this->render('eStoreBlogBundle:Blog:posts.html.twig', array(
    			'posts' => $posts,
    		));
    }

}