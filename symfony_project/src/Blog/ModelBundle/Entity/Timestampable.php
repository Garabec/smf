<?php

namespace Blog\ModelBundle\Entity;


use Doctrine\ORM\Mapping as ORM;

/**
 * Class Timestampable to define created behavior
 * 
 * @ORM\MappedSuperclass()
 * 
 **/
 

abstract class Timestampable{
    
 /**
     * @var \DateTime
     *
     * @ORM\Column(name="createdAt", type="datetime")
     */
    private $createdAt;
    
    
    /**
     * Construct
     */
    
    
    
    public function __construct(){
        
      $this->createdAt=new \DateTime;  
        
    }
    
    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return Post
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }
    
    
    
    
}