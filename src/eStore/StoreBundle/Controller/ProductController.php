<?php

namespace eStore\StoreBundle\Controller;

use eStore\StoreBundle\Form\ProductType;
use eStore\StoreBundle\Entity\Product;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\Request;

class ProductController extends Controller
{
    public function createAction(Request $request)
    {
        $product = new Product;

        $form = $this->createForm(new ProductType(), $product);

        $form->handleRequest($request);

        if ($form->isValid()){

            $em = $this->getDoctrine()->getManager();
            $em->persist($product);
            $em->flush();

            return $this->render('eStoreStoreBundle:Product:index.html.twig');
        }

        return $this->render('eStoreStoreBundle:Product:create.html.twig', array(
                'form' => $form->createView()
            ));    }

    public function indexAction()
    {
        $repository = $this->getDoctrine()
                ->getRepository('eStoreStoreBundle:Product');

        $products = $repository->findAll();

        return $this->render('eStoreStoreBundle:Product:index.html.twig', array(
                'products' => $products,
        ));    
    }

    public function detailAction($product)
    {
        $repository = $this->getDoctrine()
                ->getRepository('eStoreStoreBundle:Product');

        $productObj = $repository->find($product);

        return $this->render('eStoreStoreBundle:Product:detail.html.twig', array(
                'product' => $productObj,
        ));
    }

    public function editAction()
    {
        return $this->render('eStoreStoreBundle:Product:edit.html.twig', array(
                // ...
            ));    }

    public function deleteAction()
    {
        return $this->render('eStoreStoreBundle:Product:delete.html.twig', array(
                // ...
            ));    }

}
