<?php

namespace eStore\UserBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
//use Doctrine\ORM\Mapping as ORM;

use FOS\UserBundle\Model\User as BaseUser;
/**
 * User
 */
class User extends BaseUser
{
    public function __construct()
    {
        parent::__construct();
        // your own logic
        
        $this->posts = new ArrayCollection();
    }


    /**
     * @var integer
     */
    protected $id;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $posts;


    /**
     * Add posts
     *
     * @param \eStore\BlogBundle\Entity\Post $posts
     * @return User
     */
    public function addPost(\eStore\BlogBundle\Entity\Post $posts)
    {
        $this->posts[] = $posts;

        return $this;
    }

    /**
     * Remove posts
     *
     * @param \eStore\BlogBundle\Entity\Post $posts
     */
    public function removePost(\eStore\BlogBundle\Entity\Post $posts)
    {
        $this->posts->removeElement($posts);
    }

    /**
     * Get posts
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPosts()
    {
        return $this->posts;
    }
    /**
     * @var \eStore\StoreBundle\Entity\ShoppingCart
     */
    private $shoppingcart;


    /**
     * Set shoppingcart
     *
     * @param \eStore\StoreBundle\Entity\ShoppingCart $shoppingcart
     * @return User
     */
    public function setShoppingcart(\eStore\StoreBundle\Entity\ShoppingCart $shoppingcart = null)
    {
        $this->shoppingcart = $shoppingcart;

        return $this;
    }

    /**
     * Get shoppingcart
     *
     * @return \eStore\StoreBundle\Entity\ShoppingCart 
     */
    public function getShoppingcart()
    {
        return $this->shoppingcart;
    }
}
