<?php

namespace eStore\StoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ShoppingCart
 */
class ShoppingCart
{
    /**
     * @var integer
     */
    private $id;


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
     * @var \eStore\UserBundle\Entity\User
     */
    private $user;


    /**
     * Set user
     *
     * @param \eStore\UserBundle\Entity\User $user
     * @return ShoppingCart
     */
    public function setUser(\eStore\UserBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \eStore\UserBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }
}
