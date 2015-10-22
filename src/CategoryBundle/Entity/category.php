<?php

namespace CategoryBundle\Entity;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * category
 */
class category
{
	
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name= null;
	
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
     * Set name
     *
     * @param string $name
     *
     * @return category
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
}

