<?php

namespace Blog\CoreBundle\Services;

use Doctrine\ORM\EntityManager;
use Blog\ModelBundle\Entity\Author;

/**
 * 
 * class AuthorManager
 * 
 **/ 
class AuthorManager {
    
    private $em;
    
    /**
     * construct
     * @param EntityManager $em
     * 
     **/ 
    public function __construct(EntityManager $em){
        
        $this->em=$em;
        
    }
    
    /**
     * @param string $slug
     * 
     *@throws NotFoundHttpException
     * 
     * return Blog\ModelBundle\Entity\Author
     * 
     **/ 
     
    public function findBySlug($slug){
        
     $author=$this->em->getRepository('ModelBundle:Author')->findOneBy(
         ['slug'=>$slug]);
         
     if(null===$author){
         
       throw  new NotFoundHttpException('Author not found') ;
         
     }    
         
     return $author;   
        
    }
    
    /**
     * @param Author $author
     * 
     * return Blog\ModelBundle\Entity\Post[]
     * 
     **/
     
    public function findPosts(Author $author){
        
      $posts=$this->em->getRepository('ModelBundle:Post')->findBy(['author'=>$author]);  
        
      return $posts;  
        
    }
    
    
    
}