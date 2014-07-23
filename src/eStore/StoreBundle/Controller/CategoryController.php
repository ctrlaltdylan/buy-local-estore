<?php

namespace eStore\StoreBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

//use eStore\StoreBundle\Entity\Category;

use eStore\StoreBundle\Form\CategoryType;

class CategoryController extends Controller
{
    public function createAction(Request $request)
    {
        $category = new Category;
        $form = $this->createForm(new CategoryType(), $category);

        $form->handleRequest($request);

        if($form->isValid()){

            $em = $this->getDoctrine()->getManager();
            $em->persist($category);
            $em->flush();

            return $this->redirect($this->generateUrl('e_store_category_index'));

        } else {

            //return $this->redirect($this->generateUrl('e_store_category_create'));
        }

        return $this->render('eStoreStoreBundle:Category:create.html.twig', array(
                'createCategoryForm' => $form->createView(),
            ));    }

    public function indexAction()
    {
        $repository = $this->getDoctrine()
                    ->getRepository('eStoreStoreBundle:Category');

        $categories = $repository->findAll();

        return $this->render('eStoreStoreBundle:Category:index.html.twig', array(
                'categories' => $categories,
            ));    }

    public function editAction()
    {
        return $this->render('eStoreStoreBundle:Category:edit.html.twig', array(
                // ...
            ));    }

    public function deleteAction()
    {
        return $this->render('eStoreStoreBundle:Category:delete.html.twig', array(
                // ...
            ));    }

}
