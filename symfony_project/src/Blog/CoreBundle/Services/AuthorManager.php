<?php

namespace Blog\CoreBundle\Services;


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
        
     $author=$this->em->getDoctrine()->getRepository('ModelBundle:Author')->findOneBy(
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
        
      $posts=$this->em->getDoctrine()->getRepository('ModelBundle:Author')->findBy($author);  
        
      return $posts;  
        
    }
    
    
    
}